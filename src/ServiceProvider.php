<?php

namespace Bomsiwor\LaravelTrustmark;

use Bomsiwor\Trustmark\Core\Trustmark;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__.'/../config/trustmark.php', 'trustmark');

        // Bind service provider
        $this->app->bind('vclaim', function () {
            return Trustmark::client(
                consId: config('trustmark.consId'),
                secretKey: config('trustmark.secretKey'),
                userKey: config('trustmark.userKey'),
                service: 'vclaim',
                env: config('trustmark.env'),
            );
        });
    }

    public function boot()
    {
        // Publish config
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/trustmark.php' => config_path('trustmark.php'),
            ], 'config');
        }
    }
}
