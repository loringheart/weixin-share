<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class WechatShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'WechatShare');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/wechat-share'),
            __DIR__.'/config/wechat-share.php' => config_path('wechat-share.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['wechatshare'] = $this->app->share(function ($app) {
            return new WechatShare();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['wechatshare'];
    }
}
