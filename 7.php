<?php

// function fibonacciSequence($max = 13)
// {
//     if ($max < 1)
//         return [];

//     $sequence = [];

//     $older = 0;
//     $newer = 1;

//     do {
//         $number = $newer + $older;
//         $sequence[] =  $number;

//         $older = $newer;
//         $newer = $number;
//     } while ($number < $max);

//     return $sequence;
// }
function getFib($n, $nN, $ct = 0, $max = 100)
{
    $ct++;
    echo "$nN \n";
    ($ct < $max) ? getFib($nN, $n + $nN, $ct) : die();
}

echo 0;
getFib(0, 1);
