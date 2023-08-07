<?php

echo "3 - <b>Crie uma classe chamada Carro</b> que possua os atributos
<b>privados: marca, modelo e ano.<br> Implemente os métodos getters e
setters</b> para cada um dos atributos. Em seguida,<br><b>crie um objeto da classe
Carro e utilize os métodos para definir e obter os valores dos
atributos</b>.<br><br>";

class Carro{
    private $marca;
    private $modelo;
    private $ano;

    public function setMarca($m){
        $this->marca = $m;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function setAno($m){
        $this->ano = $m;
    }
    public function getAno(){
        return $this->ano;
    }

    
}

//$Carro->marca = "VW";
//$Carro->modelo = "GOLF";
//$Carro->ano = 2015;

$carro = new Carro();
$carro->setMarca("VW <br>");
$carro->setModelo("GOLF <br>");
$carro->setAno(2016);
echo $carro->getMarca();
echo $carro->getModelo();
echo $carro->getAno();

//var_dump($Carro);



?>
