<?php


echo 'Optimized function';
echo '' . '<br>';

function fib($n, $all = 0)
{
    $f[0] = 1;
    $f[1] = 1;
    for ($i = 2; $i <= $n; $i++) $f[$i] = $f[$i - 1] + $f[$i - 2];
    if ($all) return $f;
    return $f[$n];
}

print fib(5);
var_dump(fib(5, 1));
