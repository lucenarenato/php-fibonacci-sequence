<?php
// function fib($m)
// {
//     $j = 0;
//     $k = 1;
//     for ($i = 0; $i <= $m; $i++) {
//         $l = $k;
//         $k = $j + $k;
//         $j = $l;
//     }
//     return $k;
// }
// function fibonacci($n)
// {
//     if (($n == 0) || ($n == 1)) {
//         return $n;
//     }
//     return fibonacci($n - 2) + fibonacci($n - 1);
// }
echo 'http://www.phponwebsites.com/2015/06/php-fibonacci-series-of-given-number.html';
echo '' . '<br>';
function fibonacci_series($n)
{
    $f1 = -1;
    $f2 = 1;

    for ($i = 1; $i <= $n; $i++) {
        $f = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f;
        echo "$f<br />";
    }
}

echo fibonacci_series(5);
