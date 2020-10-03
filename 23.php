<?php


echo 'A série Fibonacci se parece com: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144 Significa se você adicionar os dois valores anteriores e a exibição de saída é o próximo valor.';
echo '' . '<br>';
echo '1 + 2 = 3 3 + 5 = 8 Assim Como obter este tipo de saída em PHP';
echo '' . '<br>';
$num1 = 0 ; 
$num2 = 1 ; 

for ($i=0; $i<=10 ; $i++) { 
    # Foboniici
    $result = $num1 + $num2 ; 
    $num1 = $num2 ; 
    $num2 = $result ; 
    echo $result ; 
}
