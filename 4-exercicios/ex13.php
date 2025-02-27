<?php


function verificarAprovacao($nome, $notas, $frequencia, $totalAulas) {
    $media = array_sum($notas) / count($notas);
    $percentualFrequencia = ($frequencia / $totalAulas) * 100;
    
    echo "Aluno: $nome\n";
    echo "Média: $media\n";
    echo "Frequência: $percentualFrequencia%\n";
    
    if ($media >= 7 && $percentualFrequencia >= 75) {
        echo "Resultado: Aprovado\n";
    } elseif ($media < 7) {
        echo "Resultado: Reprovado por média\n";
    } elseif ($percentualFrequencia < 75) {
        echo "Resultado: Reprovado por frequência\n";
    }
}

// Exemplo de entrada de dados
$nome = readline("Digite o nome do aluno: ");
$notas = [];
$notas[] = (float)readline("Digite a nota de Português: ");
$notas[] = (float)readline("Digite a nota de Matemática: ");
$notas[] = (float)readline("Digite a nota de Inglês: ");
$notas[] = (float)readline("Digite a nota de Informática: ");
$frequencia = (int)readline("Digite o total de presenças: ");
$totalAulas = (int)readline("Digite o total de aulas: ");

// Chamada da função
verificarAprovacao($nome, $notas, $frequencia, $totalAulas);

?>