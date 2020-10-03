<?php
## using for loop

echo 'using for loop';
function fib($n)
{
    $fib_array = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib_array[$i] = $fib_array[$i - 1] + $fib_array[$i - 2];
    }
    return $fib_array;
}

print_r(fib(6));

echo '' . '<br>';
echo 'recursive functions';
function rec_fib($x)
{
    if ($n < 2) {
        return $n;
    }
    return fib($n - 1) + fib($n - 2);
}

print_r(rec_fib(6));
