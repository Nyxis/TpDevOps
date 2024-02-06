<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class SumUnitTest extends TestCase
{
    private function sum(int $a, int $b)
    {
        return $a + $b;
    }

    public function testSumPostive()
    {
        $this->assertEquals($this->sum(1, 4), 6);
    }

    public function testSumNegative()
    {
        $this->assertEquals($this->sum(1, -4), -3);
    }
}
