<?php
echo '...' . '<br>';

define('NUM',11);
$a = 0;
$b = 1;

echo "$a $b "; // 0 1

for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ ) 
{
  echo $c = $a+$b;
  echo " ";
}

echo '...' . '<br>';
