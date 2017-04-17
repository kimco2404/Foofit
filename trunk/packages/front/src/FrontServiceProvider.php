<?php

namespace Front;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class FrontServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
        $this->publishes([
            __DIR__ . '/public' => public_path('front'),
                ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
        include __DIR__ . '/routes.php';
        $this->app->make('Front\Controllers\FrontController');

        $this->loadViewsFrom(__DIR__ . '/views', 'front');
    }

}
