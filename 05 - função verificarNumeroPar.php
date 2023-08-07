<?php

echo "5 - Crie uma função chamada <b>verificarNumeroPar</b> que receba um
número como parâmetro e retorne true se o número for par, e false
caso contrário.<br><br>";


function verificarNumeroPar($numero) {
    
    // Verifica se o resto da divisão por 2 é igual a zero
    if ($numero % 2 === 0) {
        return true; 
    } else {
        return false; 
    }
}


$numero1 = 28;
$numero2 = 59;

if (verificarNumeroPar($numero1)) {
    echo "$numero1 é par<br>"; 
} else {
    echo "$numero1 é ímpar<br>";
}

if (verificarNumeroPar($numero2)) {
    echo "$numero2 é par<br>";
} else {
    echo "$numero2 é ímpar<br>"; 
}

?>
