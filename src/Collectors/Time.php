<?php

namespace Bbsnly\Performer\Collectors;

class Time
{
    /**
     * @var float
     */
    private $startTime;

    /**
     * @var float
     */
    private $endTime;

    /**
     * @param callable $func
     */
    public function __construct(callable $func)
    {
        $this->startMeasure();

        $func();

        $this->stopMeasure();
    }

    /**
     * @return array
     */
    public function getMeasure(): array
    {
        $duration = $this->endTime - $this->startTime;

        return [
            'start' => $this->startTime,
            'end' => $this->endTime,
            'duration' => $duration,
            'duration_formatted' => $this->format($duration)
        ];
    }

    /**
     * @return void
     */
    private function startMeasure(): void
    {
        $this->startTime = (float) microtime(true);
    }

    /**
     * @return void
     */
    private function stopMeasure(): void
    {
        $this->endTime = (float) microtime(true);
    }

    /**
     * @param float $duration
     * @return string
     */
    private function format(float $duration): string
    {
        if ($duration < 0.001) {
            return round($duration * 1000000) . 'μs';
        }

        if ($duration < 1) {
            return round($duration * 1000, 2) . 'ms';
        }

        return round($duration, 2) . 's';
    }
}
