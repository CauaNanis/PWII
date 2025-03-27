<?php

    $alunos = [
        'Memphis Depay 🇳🇱',
        'Yuri Alberto',
        'Rodrigo Garro'
    ];

    dizerOla($alunos);

    function dizerOla($estudantes){
        foreach ($estudantes as $index => $estudante) {
            echo "<h1>$estudante</h1>";
        }
    }

?>