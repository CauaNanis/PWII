<?php
    echo 'Digite o primeiro número: ';
    $n1 = (int) readline();
    echo 'Digite o segundo número: ';
    $n2 = (int) readline();
    echo 'Digite o terçeiro número: ';
    $n3 = (int) readline();

    $n = [$n1, $n2, $n3];
    sort($n);

    echo 'Os números em ordem crescente: ' . implode(', ', $n) . '\n';
?>