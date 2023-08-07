<?php

echo " 1 - Crie uma classe chamada <b>Pessoa</b> que possua os seguintes
atributos: <b>nome, idade e profissão</b>.<br> A classe deve ter um método
chamado <b>apresentar()</b>, que exiba uma mensagem com os dados da
pessoa.<br><br>";


class Pessoa {

public $nome;
public $idade;
public $profissao;

    public function dadosClasse(){
        echo "<b>Classe Pessoa</b><br><br>";

    }
}

$carlos = new Pessoa();
$carlos->nome = "Carlos Vieira Santos";
$carlos->idade = "59";
$carlos->profissao = "Pedreiro";

$carlos->dadosClasse();
echo "Nome: $carlos->nome<br> Idade: $carlos->idade <br> Profissao: $carlos->profissao <br>";


?>
