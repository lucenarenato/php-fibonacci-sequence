<?php
echo '...aguarde' . '<br>';

function fib($n)
{ // a function called fib, declaire variable n (the sequence number)
    if ($n == 0) return 0;
    if ($n < 3) {
        return 1;
    } // if n is smaller than 3 return n (1 or 2)
    else {
        return fib($n - 1) + fib($n - 2);
    }
    /* if the number is 3 or above do 2 sums (n-1) and (n-2)
    and then add the 2 sums together (n-1)+(n-2)
    Example Fibonacci number 4
    (4-1)+(4-2) = 5
    3 + 2 = 5
    */
}

echo fib(50);
