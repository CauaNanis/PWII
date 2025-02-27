<?php
$nome = "Walter";
$venda = 1000;
$valorf;
$bonus;

if ($venda <= 1000) {
    $bonus = "0%";
    $valorf = $venda;
} else if ($venda > 1000 && $venda < 2000) {
    $bonus = "30%";
    $valorf = $venda * 1.3;
} else if ($venda >= 2000 && $venda < 5000) {
    $bonus = "20%";
    $valorf = $venda * 1.2;
} else {
    $bonus = "10%";
    $valorf = $venda * 1.1;
}
;

echo "
Vendedor: $nome \n
############################## \n
Total de Vendas: $venda \n
Valor do Bônus: $bonus \n
Total a Receber: $valorf \n
##############################
";
?>