<?php

namespace DigitalTouch\Metrics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DigitalTouch\Metrics\Metrics
 */
class MetricsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-metrics';
    }
}
