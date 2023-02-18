<h1>Import database by command :</h1>
1. Open cmd
2. mysql -u username -pasword database_name < file location

<h5>Example: </h5> mysql -u root -p xgroup2 < Downloads\xgroup.sql


<h1>New Module Create :</h1><br>
1. Module create : php artisan make:module ModuleName<br>
2. Model create : php artisan module:model ModelName ModuleName<br>
3. Migration create : php artisan module:nmigration MigrationName ModuleName<br>
4. Controller create : php artisan module:controller ControllerName ModuleName<br><br>


<h4>Complete theses task to active module</h4>
<h5>Step 1.</h5> Open RouteServiceProvider<br>
<h5>Step 2.</h5> Add this code to RouteServiceProvider.php file- <br>

<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */

    protected $namespace = '\\';
    public $HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }



    protected function mapWebRoutes()
    {

            
            
        /*
        |--------------------------------------------------------------------------
        | WEB
        |--------------------------------------------------------------------------
        */
        Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/web.php'));




        /*
        |--------------------------------------------------------------------------
        | PRODUCT
        |--------------------------------------------------------------------------
        */
        Route::middleware('web')->namespace($this->namespace)->group(base_path('module/Product/routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
<br><br><br><br>



<h5>Step 3.</h5>



