<?php
    $a = 3;
    $b = 3;
    $c = 3;

    if ($a + $b < $c || $c + $b < $a || $a + $c < $b) {
      echo 'Não é um triângulo';
    } else if ($a == $b && $b == $c) {
      echo 'O triângulo é equilátero';
    }else if ($a != $b && $b != $c && $a != $c) {
      echo 'O triângulo é escaleno';
    }else {
      echo "O triângulo é isósceles";
    }
    
?>