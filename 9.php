<?php

$prev = 0;
$curr = 1;
$fib = 0;
for ($i = 0; $i <= 20; $i++) {
    echo $fib . ",";
    $prev = $curr;
    $curr = $fib;
    $fib = $prev + $curr;
}
