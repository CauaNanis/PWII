<?php

    $pessoa1 = [];
    $pessoa1['nome'] = 'Amaurizin';
    $pessoa1['sobrenome'] = 'Verdinho  Marciano';
    $pessoa1['idade'] = 60;

    $pessoa2 = [];
    $pessoa2['nome'] = 'Diogão';
    $pessoa2['sobrenome'] = 'Paulindo';
    $pessoa2['idade'] = 30;

    $lista_pessoas = [
        $pessoa1, 
        $pessoa2
    ];

    echo '<h1>O nome é: ' . $lista_pessoas[0]['nome'] . '</h1>';

?>