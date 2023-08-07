<?php

echo "4 - Crie uma função chamada <b>calcularAreaCirculo</b> que receba o
raio de um círculo como parâmetro e retorne a sua área. <b>Utilize a
fórmula A = π * r², onde A é a área e r é o raio</b>.<br><br>";

function calcularAreaCirculo($raio) {
    // M_PI do PHP para obter o valor (pi)
    // Função POW converterá todos os tipos para números, mesmo valores não escalares
    $area = M_PI * pow($raio, 2);
    return $area;
}


$raio1 = 5;
$raio2 = 3.5;

$area1 = calcularAreaCirculo($raio1);
$area2 = calcularAreaCirculo($raio2);

echo "A área do círculo com raio $raio1 é: $area1<br>"; 
echo "A área do círculo com raio $raio2 é: $area2<br>"; 

?>
