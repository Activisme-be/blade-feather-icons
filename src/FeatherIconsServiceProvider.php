<?php

namespace Actb\BladeFeatherIcons;

use BladeUI\Icons\Factory;
use Carbon\Laravel\ServiceProvider;

/**
 * Class FeatherIconsServiceProvider
 *
 * @package Actb\BladeFeatherIcons
 */
class FeatherIconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('feather-icons', [
            'path' => __DIR__ . '/../resources/svg',
            'prefix' => 'fi',
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-feather-icons'),
            ], 'blade-feather-icons');
        }
    }
}
