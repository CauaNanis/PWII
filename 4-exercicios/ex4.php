<?php
    $mes = 'Fevereiro';

    if ($mes == 'Janeiro' || $mes == 'Fevereiro' || $mes == 'Março' || $mes == 'Abril' || $mes == 'Maio' || $mes == 'Junho') {
        echo 'Primeiro Semestre';
    } else if ($mes == 'Julho' || $mes == 'Agosto' || $mes == 'Setembro' || $mes == 'Outubro' || $mes == 'Novembro' || $mes == 'Dezembro'){
        echo 'Segundo Semestre';
    }else {
        echo 'Mês inválido';
    }
    
?>