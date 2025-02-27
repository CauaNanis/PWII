<?php
    echo "Digite seu ano de nascimento: ";
    $ano_nascimento = (int) readline();
    $ano_atual = date("Y");
    $idade = $ano_atual - $ano_nascimento;
    
    if ($idade >= 18) {
        echo "Você é maior de idade.\n";
    } else {
        echo "Você é menor de idade.\n";
    }
?>