<?php

namespace App\Http\Livewire\Settings;

use Exception;

class WebAppSettings extends BaseSettingsComponent
{



    // App settings
    public $maxScheduledDay;
    public $maxScheduledTime;
    public $minScheduledTime;
    public $autoCancelPendingOrderTime;
    public $defaultVendorRating;
    //
    public $productDetailsUpdateRequest;


    public function mount()
    {
        $this->appSettings();
    }





    public function render()
    {
        return view('livewire.settings.web-app-settings');
    }




    //App settings
    public function appSettings()
    {
        $this->maxScheduledDay = setting('maxScheduledDay', 5);
        $this->maxScheduledTime = setting('maxScheduledTime', 2);
        $this->minScheduledTime = setting('minScheduledTime', 2);
        $this->autoCancelPendingOrderTime = setting('autoCancelPendingOrderTime', 30);
        $this->defaultVendorRating = setting('defaultVendorRating', 5);
        $this->productDetailsUpdateRequest = (bool) setting('productDetailsUpdateRequest', 0);
    }

    public function saveAppSettings()
    {


        try {

            $this->isDemo();



            $appSettings = [
                'maxScheduledDay' =>  $this->maxScheduledDay,
                'maxScheduledTime' =>  $this->maxScheduledTime,
                'minScheduledTime' =>  $this->minScheduledTime,
                'autoCancelPendingOrderTime' =>  $this->autoCancelPendingOrderTime,
                'defaultVendorRating' =>  $this->defaultVendorRating,
                'productDetailsUpdateRequest' =>  (int) $this->productDetailsUpdateRequest,
            ];

            // update the site name
            setting($appSettings)->save();



            $this->showSuccessAlert(__("App Settings saved successfully!"));
            $this->goback();
        } catch (Exception $error) {
            $this->showErrorAlert($error->getMessage() ?? __("App Settings save failed!"));
        }
    }
}
