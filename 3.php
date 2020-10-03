<?php

$fib = [1, 0];
for ($i = 0; $i < 30; $i++) {
    $next = array_sum($fib);
    array_shift($fib);
    array_push($fib, $next);
    echo $next . ", ";
}

// return $fib;
echo "<pre>";
// print_r();
