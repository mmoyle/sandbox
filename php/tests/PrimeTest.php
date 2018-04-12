<?php

namespace PrimeNumber;

require_once '../PrimeNumber/Prime.php';

use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{

    /** @var Prime */
    private $prime;

    public function setUp()
    {
        $this->prime = new Prime();
    }

    public function testIsPrime()
    {
        $this->assertTrue($this->prime->isPrime(3));
        $this->assertTrue($this->prime->isPrime(5));
        $this->assertTrue($this->prime->isPrime(97));
    }

    public function testIsNotPrime()
    {
        $this->assertFalse(($this->prime->isPrime(1)));
        $this->assertFalse(($this->prime->isPrime(4)));
        $this->assertFalse(($this->prime->isPrime(100)));
    }
}
