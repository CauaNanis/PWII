<?php
    //vetor = array de unidimensional
    $lista_frutas = [];

    // Array Sequencial utiliza Números
    $lista_frutas[0] = 'Banana';
    $lista_frutas[1] = 'Maçã';
    $lista_frutas[2] = 'Morango';
    $lista_frutas[3] = 'Uva';

    echo '<pre>';
    echo var_dump($lista_frutas);

    // Array Associativa utiliza texto
    $lista_objetos['objeto1'] = 'Bola';
    $lista_objetos['objeto2'] = 'Boneca';

    echo '<pre>';
    echo var_dump($lista_objetos);
    echo var_dump($lista_objetos['objeto1']);

    

?>