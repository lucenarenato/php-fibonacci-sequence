<?php

echo '.' . '<br>';
function printFibonacci($n)
{

   $first = 0;
   $second = 1;

   echo "Fibonacci Series n => ";

   echo $first . ' ' . $second . ' ';

   for ($counter = 2; $counter < $n; $counter++) {

      $third = $first + $second;

      echo $third . ' ';

      $first = $second;
      $second = $third;
   }
}

/* Function call to print Fibonacci series upto 10 numbers. */

printFibonacci(10);
