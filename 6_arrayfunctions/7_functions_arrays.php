<?php

    $pessoas = [
        [
            'nome' => 'Memphis',
            'idade' => 18
        ],
        [
            'nome' => 'Yuri',
            'idade' => 20 
        ],
        [
            'nome' => 'Garro',
            'idade' => 15 
        ]
    ];

    foreach ($pessoas as $key => $pessoas) {
        echo '<center>';
        if ($pessoas ['idade'] < 16)
            echo '<h1>' . $pessoas['nome'] . ' não pode votar!' . '</h1>';

        elseif ($pessoas ['idade'] >= 16 && $pessoas ['idade'] <= 18 )
            echo '<h1>' . $pessoas['nome'] . ' voto opicional!' . '</h1>';  

        elseif ($pessoas ['idade'] >= 18 && $pessoas ['idade'] <= 70 )
            echo '<h1>' . $pessoas['nome'] . ' voto obrigatório!' . '</h1>'; 

        else
            echo '<h1>' . $pessoas['nome'] . ' voto opicional!' . '</h1>';   
            
    }

?>