<?php

namespace PrimeNumber;

require_once "../PrimeNumber/PrimeFactors.php";

use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{

    public function testOne()
    {
        $this->assertEquals([], PrimeFactors::generate(1));

    }

    public function testTwo()
    {
        $this->assertEquals([2], PrimeFactors::generate(2));

    }

    public function testThree()
    {
        $this->assertEquals([3], PrimeFactors::generate(3));

    }

    public function testFour()
    {
        $this->assertEquals([2,2], PrimeFactors::generate(4));
    }

    public function testSix()
    {
        $this->assertEquals([2,3], PrimeFactors::generate(6));
    }

    public function testEight()
    {
        $this->assertEquals([2,2,2], PrimeFactors::generate(8));
    }

    public function testNine()
    {
        $this->assertEquals([3,3], PrimeFactors::generate(9));
    }

    public function testThirteen()
    {
        $this->assertEquals([13], PrimeFactors::generate(13));
    }

}
