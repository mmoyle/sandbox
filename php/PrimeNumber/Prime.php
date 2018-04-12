<?php


namespace PrimeNumber;


class Prime
{
    public function isPrime(int $number) : bool
    {
        // 0,1,are not prime
        if ($number < 2 )
            return false;

        // if number is even return false
        if ($number % 2 === 0 )
            return false;

        // now we will take all odd numbers > 1 and < $number and see if they are divisible
        // if so return false
        for ($i = 3; $i < $number -1; $i = $i + 2)
        {
            if ($number % $i === 0)
            {
                return false;
            }
        }

        return true;
    }
}