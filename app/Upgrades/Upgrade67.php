<?php

namespace App\Upgrades;

use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Upgrade67 extends BaseUpgrade
{

    public $versionName = "1.7.40";
    //Runs or migrations to be done on this version
    public function run()
    {
        //add view_report_on_app to the permissions table
        $permission = new Permission();
        $permission->name = 'view_report_on_app';
        $permission->guard_name = 'web';
        $permission->save();
        //add view_report_on_app to the manager role
        $role = Role::where('name', 'manager')->first();
        $role->givePermissionTo('view_report_on_app');

        //make commission column in vendor table nullable
        Schema::table('vendors', function ($table) {
            $table->double('commission', 8, 2)->nullable()->change();
        });

        //add approved column to the products table if it does not exist
        if (!Schema::hasColumn('products', 'approved')) {
            Schema::table('products', function ($table) {
                $table->boolean('approved')->default(1);
            });
        }


        //first or create permission: auto-approve-product
        $permission = new Permission();
        $permission->name = 'auto-approve-product';
        $permission->guard_name = 'web';
        $permission->save();
        //add auto-approve-product to the admin & city-admin roles
        $role = Role::where('name', 'admin')->first();
        $role->givePermissionTo('auto-approve-product');
        $role = Role::where('name', 'city-admin')->first();
        $role->givePermissionTo('auto-approve-product');
        //



    }
}
