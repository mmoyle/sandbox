<?php


namespace PrimeNumber;


class PrimeFactors
{

    public static function generate(int $n) : array
    {
        $primes = [];

        $candidate = 2;
        while ($n > 1) {
            for (;$n % $candidate == 0; $n /=$candidate) {
                $primes[] = $candidate;
            }

            $candidate++;
        }

        if ($n > 1) {
            $primes[] = $n;
        }

        return $primes;
    }


}