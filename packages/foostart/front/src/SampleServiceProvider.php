<?php

namespace foostart\front;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views/', 'front');
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
        include __DIR__ . '/routes.php';
    }

}
