<?php


echo '';
echo '' . '<br>';

echo "Renato Lucena";
echo "<br />";
echo "Fibonacci Series Up to 10th term is:-" . "<br />";
$fibonacci = 0;
$a = 0;
$b = 1;
echo $a . ",";
echo $b . ",";
while ($fibonacci < 20) {
    $c = $a + $b;
    echo $c . ",";
    $a = $b;
    $b = $c;
    $fibonacci = $fibonacci + 1;
}
