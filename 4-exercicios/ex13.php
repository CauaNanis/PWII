<?php
    $nome = 'Cauã';
    $pt = 10;
    $mt = 10;
    $en = 10;
    $in = 10;
    $frequencia = 100;
    $media = ($pt + $mt + $en + $in) / 4;
    
    if ($media > 7 && $frequencia > 75) {
        echo 'Aprovado';
    } else{
        echo 'Reprovado';
    }
    
?>