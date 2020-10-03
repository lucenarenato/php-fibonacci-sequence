<?php


function fibonacci($n)
{
    $V5   = sqrt(5);
    $Phi  = (1 + $V5) / 2;
    $iPhi = -1 / $Phi;
    return round((pow($Phi, $n) - pow($iPhi, $n)) / $V5);
}

echo fibonacci(1) . PHP_EOL;
echo fibonacci(5) . PHP_EOL;
echo fibonacci(100) . PHP_EOL;
