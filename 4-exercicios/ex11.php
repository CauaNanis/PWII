<?php
function ehTriangulo($a, $b, $c){
    return ($a + $b > $c) && ($a + $c > $b) && ($c + $b > $a);
}
 echo "Digite o lado A";
 $a = (float) trim(fgets(STDIM));

 echo "Digite o lado B";
 $b = (float) trim(fgets(STDIM));

 echo "Digite o lado C";
 $c = (float) trim(fgets(STDIM));

 if (!ehTriangulo($a, $b,$c)){
    echo "Os valores informados não formam um triangulo. \n";
 } elseif($a == $b && $b == $c){
    echo "o triangulo e equilatero. \n";
 }elseif($a == $b || $a == $c || $b == $c){
    echo " o triangulo e isosceles. \n";
 }else{
    echo " O triangulo e escaleno. \n";
 };

?>