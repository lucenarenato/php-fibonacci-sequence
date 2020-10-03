<?php


echo '';
echo '' . '<br>';

function fibonacci($fi)
{
    $v1 = 0;
    $v2 = 1;
    $v3 = 1;
    for ($contador = 0; $contador <= $fi; $contador++) {
        if ($contador <= 1) {
            $v3 = $contador;
        } else {
            $v3 = $v1 + $v2;
            $v1 = $v2;
            $v2 = $v3;
        }
        $res = $v3 + $v1;

        echo "$v3 + $v1 = $res  <br><br>";
    }
}
fibonacci(13);
