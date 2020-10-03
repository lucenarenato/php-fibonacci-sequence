<?php

$first = 0;
$second = 1;
$nex = 0;
$num = 10;
for ($c = 0; $c < $num; $c++) {
   if ($c <= 1) {
      $next = $c;
   } else {
      $next = $first + $second;
      $first = $second;
      $second = $next;
   }
   echo $next;
}
