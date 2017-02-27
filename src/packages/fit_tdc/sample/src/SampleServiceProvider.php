<?php

namespace Fit_tdc\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views/', 'sample');
        $this->publishes([
            __DIR__ . '/public' => public_path('sample'),
                ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';
    }

}
