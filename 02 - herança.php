<?php

echo "2 - <b>Crie uma classe chamada Animal</b> com um método <b>emitirSom()</b>.
Em seguida, <b>crie duas classes filhas, Cachorro e Gato, que herdam
de Animal</b> e sobrescrevem o método <b>emitirSom()</b> para exibir o som
específico de cada animal. Crie objetos das classes <b>Cachorro e
Gato</b> e chame o método <b>emitirSom()</b> para cada um deles.<br><br>";

class Animal {


    public function emitirSom(){
        echo "Emitir som";
    }
}


class Cachorro extends Animal{
    public $somCachorro;

    public function emitirSom(){
        echo "O cachorro latiu! <br>";
    }
}

class Gato extends Animal{
    public $somGato;

    public function emitirSom(){
        echo "O gato miou! <br>";
    }
}

$cachorro = new Cachorro();
$cachorro->somCachorro = "Latiu";
$cachorro->emitirSom();

$gato = new Gato();
$gato->somGato = "Miou";
$gato->emitirSom();




?>
