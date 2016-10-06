<?php

namespace App\Providers;


use App\Models\Categories;
use App\Models\Lists;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //проверяем если есть таблица миграций
        if (!Schema::hasTable('migrations')) return;

        $categories = Categories::all();

        view()->share('categories', $categories);

        $menu = Lists::where('slug', 'menyu')->first();

        $menuItems = $menu->children()->enabled()->get();

        view()->share('menuItems', $menuItems);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
