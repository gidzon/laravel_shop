<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NavigationComposer;
use App\Model\Category;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer([
            'layout.header',
            'admin.product.create',
            'admin.category.create',
            'admin.admin',
            'admin.category.edit',
            'admin.product.edit',
        ], NavigationComposer::class);
    }
}
