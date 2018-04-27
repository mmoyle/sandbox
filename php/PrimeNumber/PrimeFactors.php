<?php


namespace PrimeNumber;


class PrimeFactors
{

    public static function generate(int $n) : array
    {
        $primes = [];

        for ($candidate = 2; $n > 1; $candidate ++)
            for (;$n % $candidate == 0; $n /=$candidate)
                $primes[] = $candidate;

        return $primes;
    }


}