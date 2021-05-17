<?php

namespace DigitalTouch\Metrics;

final class Metrics
{
    protected array $metrics = [];

    public function add(Metric $metric): Metrics
    {
        array_push($this->metrics, $metric);
        return $this;
    }

    public function metrics(): array
    {
        return $this->metrics;
    }
}
