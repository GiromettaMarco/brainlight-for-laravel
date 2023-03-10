<?php

namespace Brainlight\BrainlightForLaravel;

use Illuminate\Support\ServiceProvider;

class BrainlightServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // Merge Configurations
        $this->mergeConfigFrom(__DIR__ . '/../config/brainlight.php', 'brainlight');

        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/brainlight.php' => config_path('brainlight.php'),
        ]);

        // Start Brainlight Engine
        $this->app->extend('view.engine.resolver', function ($service, $app) {
            $service->register('brainlight', function () use ($app) {
                return $app->makeWith(BrainlightEngine::class, ['options' => $this->getOptions()]);
            });
            return $service;
        });

        // Add Brainlight extension to views resolution
        $this->app->extend('view', function ($service) {
            $service->addExtension(config('brainlight.extension'), 'brainlight');
            return $service;
        });
    }

    /**
     * Collect configuration options.
     *
     * @return array
     */
    private function getOptions(): array
    {
        $options = [
            'cacheDir' => config('brainlight.cacheDir'),
            'templatesDir' => false,
            'logicNamespace' => config('brainlight.logicNamespace'),
            'extension' => config('brainlight.extension'),
            'escapeFlags' => config('brainlight.escapeFlags'),
            'escapeEncoding' => config('brainlight.escapeEncoding'),
            'escapeDoubleEncode' => config('brainlight.escapeDoubleEncode'),
        ];

        $options['partialsDir'] = config('brainlight.partialsDir') ?? config('view.paths');

        return $options;
    }
}