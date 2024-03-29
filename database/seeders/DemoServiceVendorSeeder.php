<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\Vendor;
use App\Models\VendorType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoServiceVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        $vendorTypeId = VendorType::where('slug',  'service')->first()->id;


        //cretae category
        $category = Category::firstOrCreate([
            'vendor_type_id' => $vendorTypeId,
        ], [
            'name' => 'General',
            'is_active' => 1,
        ]);

        //create subcategory
        $subcategory = Subcategory::firstOrCreate([
            'category_id' => $category->id,
        ], [
            'name' => 'General',
            'is_active' => 1,
        ]);

        //delete all vendors with food type
        // $vendorIds = Vendor::where('vendor_type_id', $vendorTypeId)->pluck('id')->toArray();
        // Vendor::where('vendor_type_id', $vendorTypeId)->delete();
        //delete all products
        // Service::whereIn('vendor_id', $vendorIds)->delete();


        //
        $faker = \Faker\Factory::create();

        $vendorNames = [
            $faker->company,
            $faker->company,
            $faker->company,
            $faker->company,
            $faker->company,
        ];
        //array of services: e.g Painting, Moving, Cleaning
        $vendorServices = [
            [
                "Diagnose & Software Checkup",
                "Virus & Spyware Removal",
                "Data Recovery",
            ],
            [
                "Engine & Oil , Filter Change",
                "Brake Pads & Rotors Replacement",
            ],
            [
                "Bridal Makeover",
                "Massage Therapy",
            ],
            [
                "Plumbing",
                "Electrical Repair",
                "Carpentry",
                "Painting",
                "Furniture Assembly",
                "Home Cleaning",
            ],
            [
                "Cable TV Installation",
                "Air Conditioner Installation",
                "Home Theater Installation",
                "Home Security System Installation",
            ]
        ];
        //

        //Loop through the vendor names
        foreach ($vendorNames as $key => $vendorName) {
            $model = new Vendor();
            $model->name = $vendorName;
            $model->description = $faker->text;
            $model->delivery_fee = $faker->randomNumber(2, false);
            $model->delivery_range = rand(10, 6000);
            $model->phone = $faker->phoneNumber;
            $model->email = $faker->email;
            $model->address = $faker->address;
            $model->latitude = $faker->latitude();
            $model->longitude = $faker->longitude();
            $model->tax = rand(0, 1);
            $model->pickup = 0;
            $model->delivery = 1;
            $model->is_active = 1;
            $model->vendor_type_id = $vendorTypeId;
            $model->save();
            //
            $imageUrl = "https://source.unsplash.com/800x480/?" . urlencode($model->name);
            try {
                $model->addMediaFromUrl($imageUrl)->toMediaCollection("logo");
                $model->addMediaFromUrl($imageUrl)->toMediaCollection("feature_image");
            } catch (\Exception $ex) {
                logger("Error", [$ex->getMessage()]);
            }

            //add product
            $vendorServiceList = $vendorServices[$key];
            foreach ($vendorServiceList as $vendorServiceName) {
                $service = new Service();
                $service->name = $vendorServiceName;
                $service->description = "";
                $service->price = rand(10, 100000);
                $service->is_active = 1;
                $service->duration = "fixed";
                $service->vendor_id = $model->id;
                $service->category_id = $category->id;
                $service->subcategory_id = $subcategory->id;
                $service->save();
                //
                try {
                    $imageUrl = "https://source.unsplash.com/800x480/?" . urlencode($service->name);
                    $service->addMediaFromUrl($imageUrl)->toMediaCollection();
                } catch (\Exception $ex) {
                    logger("Error", [$ex->getMessage()]);
                }
            }
        }
    }
}
