<?php

function fib1($n)
{
    return $n < 3 ? 1 : fib1($n - 1) + fib1($n - 2);
}
//echo $n;
function fib2($n, $c = 2, $n2 = 0, $n1 = 1)
{
    return $c < $n ? fib2($n, $c + 1, $n1, $n1 + $n2) : $n1 + $n2;
}
//echo $n;