<?php

namespace DigitalTouch\Metrics;

use DigitalTouch\Metrics\Commands\MakeValueMetricsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-metrics')
            ->hasConfigFile()
            ->hasViews()
            //->hasMigration('create_laravel_metrics_table')
            ->hasCommand(MakeValueMetricsCommand::class);

        $this->app->singleton(Metrics::class, function () {
            return new Metrics();
        });
        $this->app->alias(Metrics::class, 'laravel-metrics');
    }
}
