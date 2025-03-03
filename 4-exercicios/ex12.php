<?php
    $v1 = 7;
    $v2 = 10;
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