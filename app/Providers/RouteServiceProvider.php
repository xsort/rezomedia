<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //
        $router->pattern('id', '[0-9]+');
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router,  Request $request)
    {
        //localization
        $segment = $request->segment(1);
        if (array_key_exists($segment, $this->app->config->get('app.locales'))){
            $router->group(['namespace' => $this->namespace, 'prefix' => $segment], function ($router) {
                require app_path('Http/routes.php');
            });
        }else{
            $locale = $this->app->config->get('app.fallback_locale');
            $router->group(['namespace' => $this->namespace], function ($router) {
                require app_path('Http/routes.php');
            });
        }

        $this->app->setLocale($locale);
    }
}
