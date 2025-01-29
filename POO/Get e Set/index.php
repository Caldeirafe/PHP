<?php

//MODELO
class Mago{

    //Atributos
    public $nome;
    public $magia;

    //Metodos
    function __set($x, $y){
        $this->$x = $y;
    }

    function __get($x){
        return $this->$x;
    }

    function escrever(){
        return "{$this->__get('nome')}<br> 
        Magia {$this->__get('magia')}<hr>";
    }
}

//Instanciando
$m1 = new Mago; 
$m2 = new Mago;
$m3 = new Mago;
$m4 = new Mago;

$m1->__set("nome", "Gilson");
$m1->__set("magia", "Fogo");

$m2->__set("nome", "Glauber");
$m2->__set("magia", "Gelo");

$m3->__set("nome", "Kleiton");
$m3->__set("magia", "Negra");

$m4->__set("nome", "Kalvin");
$m4->__set("magia", "Eletrica");

echo $m1->escrever();
echo $m2->escrever();
echo $m3->escrever();
echo $m4->escrever();
?>