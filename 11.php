<?php
echo '...' . '<br>';
function fibonacci($n, $rec = 0) {
    echo "$n\t";
    fibonacci($n + $rec, $n);
}
echo fibonacci(1);