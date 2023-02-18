<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Module\Permission\Models\Module;

class MigrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        /*
         |--------------------------------------------------------------------------
         | PRODUCT
         |--------------------------------------------------------------------------
        */
        $this->loadMigrationsFrom([
            base_path().DIRECTORY_SEPARATOR.'module'.DIRECTORY_SEPARATOR.'Product'.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.'migrations',
        ]);
        






    }
}
