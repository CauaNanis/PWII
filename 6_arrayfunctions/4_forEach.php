<?php

    $alunos = [
        [
            'nome' => 'Murphis',
            'nota' => 5
        ],
        [
            'nome' => 'Yuri',
            'nota' => 10  
        ]
     ];

        foreach ($alunos as $key => $estudante) {
            if ($estudante['nota'] < 7) 
                echo 'Aluno ' . $estudante['nome'] . ' está Reprovado';
            else
                echo 'Aluno ' . $estudante['nome'] . ' está Aprovado';

            echo '<br>';
        }
        
?>