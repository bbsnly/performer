<?php

namespace Bbsnly\Performer;

use Bbsnly\Performer\Collectors\Memory;
use Bbsnly\Performer\Collectors\Time;

class Performer
{
    /**
     * @param callable $func
     * @return array
     */
    public function measure(callable $func): array
    {
        $time = new Time($func);

        $memory = new Memory();

        return [
            'time' => $time->getMeasure(),
            'memory' => $memory->getMeasure(),
        ];
    }
}
