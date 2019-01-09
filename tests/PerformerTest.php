<?php

namespace Tests;

use Bbsnly\Performer\Performer;

class PerformerTest extends TestCase
{
    /**
     * @var Performer
     */
    private $performer;

    public function setUp()
    {
        parent::setUp();

        $this->performer = new Performer;
    }

    /** @test */
    public function can_measure_performance()
    {
        $res = $this->performer->measure($this->getTestCallback());

        $this->assertArrayHasKey('time', $res);
        $this->assertArrayHasKey('memory', $res);
    }

    /**
     * @param integer $times
     * @return callable
     */
    private function getTestCallback(int $times = 1000): callable
    {
        return function () use ($times) {
            $arr = [];

            for ($i = 0; $i < $times; $i++) {
                $arr[] = $i;
            }
        };
    }
}
