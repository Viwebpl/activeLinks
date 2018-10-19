<?php

namespace viwebpl\activeLinks;

use Illuminate\Support\ServiceProvider;

class activeLinksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public static function isActiveRoute($route, $output = "active"){
        if (Route::currentRouteName() == $route) return $output;
    }

    public static function isActiveRouteCategory($route, $category, $output = "active"){
        $a = \Request::segment(2);
        if (Route::currentRouteName() == $route && $a == $category) return $output;
    }

    public static function areActiveRoutes($routes, $output = "active"){
        foreach ($routes as $route)
        {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}
