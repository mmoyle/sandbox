<?php


namespace Fibonacci;


class Fibonacci
{

    public function fib(int $length) : int
    {
        if ( $length < 2)
        {
            return 1;
        }

        return $this->fib($length -2) + $this->fib($length -1);

    }

    public function genFibArray(int $length) : array
    {
        $list = [1,1];
        for ($i = 2, $pos =0; $i < $length; $i++)
        {
            $list[$i] = $list[$pos] + $list[++$pos];
        }
        return $list;
    }

}