<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use App\Traits\GoogleMapApiTrait;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{

    use GoogleMapApiTrait;

    public function index(Request $request)
    {
        if (!empty($request->flash_sale_id)) {
            $result = FlashSaleItem::with('item')->whereFlashSaleId($request->flash_sale_id)->get();
        } else {
            $result = FlashSale::when($request->vendor_type_id, function ($query) use ($request) {
                return $query->where("vendor_type_id", $request->vendor_type_id)
                    //add when latitude and longitude are available
                    ->when($request->latitude && $request->longitude, function ($query) use ($request) {
                        return $query->whereHas('vendor_type', function ($query) use ($request) {
                            $deliveryZonesIds = $this->getDeliveryZonesByLocation($request->latitude, $request->longitude);
                            return $query->whereHas('delivery_zones', function ($query) use ($deliveryZonesIds) {
                                $query->whereIn('delivery_zone_id', $deliveryZonesIds);
                            });
                        });
                    });
            })->active()->notexpired()->get();
        }
        return response()->json($result, 200);
    }
}
