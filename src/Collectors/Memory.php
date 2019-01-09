<?php

namespace Bbsnly\Performer\Collectors;

class Memory
{
    /**
     * @var int
     */
    private $peakUsage = 0;

    /**
     * @return array
     */
    public function getMeasure(): array
    {
        $this->refreshPeakUsage();

        return [
            'peak_usage' => $this->peakUsage,
            'peak_usage_formatted' => $this->format()
        ];
    }

    /**
     * @return void
     */
    private function refreshPeakUsage(): void
    {
        $this->peakUsage = memory_get_peak_usage();
    }

    /**
     * @return string
     */
    private function format(): string
    {
        if ($this->peakUsage === 0 || $this->peakUsage === null) {
            return '0B';
        }

        $sign = $this->peakUsage < 0 ? '-' : '';

        $this->peakUsage = abs($this->peakUsage);

        $base = log($this->peakUsage) / log(1024);

        $suffixes = ['B', 'KB', 'MB', 'GB', 'TB'];

        return $sign . round(pow(1024, $base - floor($base)), 2) . $suffixes[floor($base)];
    }
}
