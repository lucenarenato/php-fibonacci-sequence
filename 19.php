<?php

echo 'recursion' . '<br>';
function printFibo($prev, $next)
{
   if ($prev > 10000000000000) return;
   $num = $prev + $next;

   echo "$num<br>";
   printFibo($next, $num);
}

printFibo(0, 1);
