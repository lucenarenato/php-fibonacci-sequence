<?php

echo '.' . '<br>';
function fibonacciSequence($pos)
{

   $fibarray = array(0, 1);

   for ($i = 2; $i <= $pos; ++$i) {
      $fibarray[$i] = $fibarray[$i - 1] + $fibarray[$i - 2];
   }

   return $fibarray;
}

echo "<pre>";
print_r(fibonacciSequence(5));
echo "<pre>";
