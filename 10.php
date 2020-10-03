<?php
echo 'Solution: Working PHP code for fibonacci sequence' . '<br>';
$count = 0;
$x = 0;
$y = 1;

echo $x . "<br />";
echo $y . "<br />";

while ($count < 10) {
    $z = $x + $y;
    echo $z . "<br />";
    $x = $y;
    $y = $z;
    $count++;
}
echo '' . '<br>';