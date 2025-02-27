<?php
    $nota = 10;

    if ($nota < 6) {
        echo 'Reprovado';
    }else if ($nota <= 7) {
        echo 'Recuperação';
    }else {
        echo 'Aprovado';
    }
?>