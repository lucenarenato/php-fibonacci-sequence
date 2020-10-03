<?php

function getFib($n)
{
    return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
}

## Simple function of fibonacci

function fibonacci($n, $first = 0, $second = 1)
{
    $fib = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $fib[] = $fib[$i] + $fib[$i - 1];
    }
    return $fib;
}
echo "<pre>";
print_r(fibonacci(50));
