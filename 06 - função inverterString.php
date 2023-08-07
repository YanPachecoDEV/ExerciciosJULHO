<?php

echo "6 - Crie uma função chamada <b>inverterString</b> que receba uma
string como parâmetro e retorne a string invertida.<br><br>";


function inverterString($string) {
    // função strrev para inverter a string
    $stringInvertida = strrev($string);
    return $stringInvertida;
}


echo "<b>String normal:</b><br>";
echo "Invertendo o valor de uma string.<br><br>";

$minhaString = "Invertendo o valor de uma string.";
echo "<b>String invertida:</b><br>";

$inversao = inverterString($minhaString);
echo $inversao;

?>
