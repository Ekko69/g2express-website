<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Mail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        //
        Blade::if('showPackage', function () {

            $user = \Auth::user();
            $isParcel = $user->vendor->vendor_type->is_parcel ?? false;

            //
            if ($user && ($user->hasAnyRole('admin') || ($user->hasAnyRole('manager') && $isParcel))) {
                return 1;
            }
            return 0;
        });

        //
        Blade::if('showService', function () {

            $user = \Auth::user();
            $isService = $user->vendor->vendor_type->is_service ?? false;

            //
            if ($user && ($user->hasAnyRole('admin') || ($user->hasAnyRole('manager') && $isService))) {
                return 1;
            }
            return 0;
        });


        //
        Blade::if('showProduct', function () {

            $user = \Auth::user();
            $isParcel = $user->vendor->vendor_type->is_parcel ?? false;
            $isService = $user->vendor->vendor_type->is_service ?? false;
            $hasVendor = $user->vendor != null ?? false;

            //
            if ($user && ($user->hasAnyRole('admin') || (!$isParcel && !$isService && $hasVendor))) {
                return 1;
            }
            return 0;
        });

        //
        Blade::if('showDeliveryBoys', function () {

            $user = \Auth::user();
            $showDeliveryBoysMenu = $user->vendor->has_drivers ?? false;

            //
            if ($user && $user->hasAnyRole('manager') && $showDeliveryBoysMenu) {
                return 1;
            }
            return 0;
        });

        Blade::if('handleDeliveryBoys', function () {

            $user = \Auth::user();
            $showDeliveryBoysMenu = $user->vendor->has_drivers ?? false;

            //
            if ($user->hasAnyRole('admin|city-admin')) {
                return 1;
            }
            //
            if ($user && $user->hasAnyRole('manager') && $showDeliveryBoysMenu) {
                return 1;
            }
            return 0;
        });

        //
        Blade::if('showDeliveryFeeSetting', function () {

            $user = \Auth::user();
            if (setting('vendorSetDeliveryFee') || $user->hasAnyRole('admin')) {
                return 1;
            }
            return 0;
        });

        if (!app()->runningInConsole()) {
            //
            try {
                if (!Schema::hasTable('settings')) {
                    $currentRoute = $this->app->request->getRequestUri();
                    if (!str_contains($currentRoute, "/install")) {
                        redirect("install")->send();
                    }
                }
            } catch (\Exception $ex) {
                //
                $currentRoute = $this->app->request->getRequestUri();
                if (!str_contains($currentRoute, "/install")) {
                    redirect("install")->send();
                }
            }
        }

        try {
            if (Schema::hasTable('settings')) {
                date_default_timezone_set(setting('timeZone', 'UTC'));
                // app()->setLocale(setting('localeCode', 'en'));
            } else {
                date_default_timezone_set('UTC');
                // app()->setLocale('en');
            }
        } catch (\Exception $ex) {
            //
            date_default_timezone_set('UTC');
            // app()->setLocale('en');
        }



        if (!$this->app->environment('production')) {
            try {
                Mail::alwaysTo(config('backend.support.email'));
            } catch (\Exception $ex) {
            }
        }
    }
}
