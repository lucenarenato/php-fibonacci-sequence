<?php
## In this example, I am using a for loop and limiting the length to 10:

$x = 0;
$y = 1;

for ($i = 0; $i <= 10; $i++) {
    $z = $x + $y;
    echo $z . "<br />";
    $x = $y;
    $y = $z;
}

// return $fib;
echo "<pre>";
// print_r();
