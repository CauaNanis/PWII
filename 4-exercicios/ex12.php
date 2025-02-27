<?php
    $v1 = 20;
    $v2 = 99999;
    $operador = "*";
    $res;

    if($operador == "+"){
        $res = $v1+$v2;
    }
    else if($operador == "-"){
        $res = $v1-$v2;
    }
    else if($operador == "*"){
        $res = $v1*$v2;
    }
    else if($operador == "/"){
        $res = $v1/$v2;
    }
    else(
        $res = "Operador Invalido!"
    );
    echo "O resultado é: $res";
?>