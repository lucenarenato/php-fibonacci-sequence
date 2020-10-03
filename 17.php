<?php
echo '...' . '<br>';

function generateFibonacci($n, $previous = 0, $current = 1)
{
   echo $previous == 0 ? $previous . '<br />' . $current . '<br />' : $current . '<br />';

   return $n == 1 ? null : generateFibonacci($n - 1, $current, $previous + $current);
}

generateFibonacci(20);
