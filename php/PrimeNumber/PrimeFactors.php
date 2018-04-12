<?php


namespace PrimeNumber;


class PrimeFactors
{

    public static function generate(int $n) : array
    {
        $primes = [];

        if ($n > 1) {
            if ($n % 2 === 0) {
                $primes[] = 2;
                $n /= 2;
            }
            if ($n > 1)
                $primes[] = $n;
        }

        return $primes;
    }


}