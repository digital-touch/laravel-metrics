<?php

namespace DigitalTouch\Metrics\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeValueMetricsCommand extends GeneratorCommand
{
    protected $signature = 'metrics:value';

    protected $description = 'Generate value metric';

    protected $type = 'Value metric';

    public function handle()
    {
        $this->comment('Value metrics generated');
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/value-metric.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Metrics';
    }
}
