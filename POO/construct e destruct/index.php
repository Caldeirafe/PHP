<?php

//MODELO
class Mago{

    //Atributos
    public $nome;
    public $magia;

//construc e destruct
public function __construct(){
    echo 'Objeto Construido!<br><br>';
}

public function __destruct(){
    echo 'Objeto Destruido!<hr>';
}


    //Metodos
    function __set($x, $y){
        $this->$x = $y;
    }

    function __get($x){
        return $this->$x;
    }

    function escrever(){
        return " Mago: {$this->__get('nome')}<br> 
        Magia: {$this->__get('magia')}<br><br>";
    }
}

//Instanciando
$m1 = new Mago;
$m1->__set("nome", "Gilson");
$m1->__set("magia", "Fogo");
echo $m1->escrever();
unset($m1);

$m2 = new Mago;
$m2->__set("nome", "Glauber");
$m2->__set("magia", "Gelo");
echo $m2->escrever();
unset($m2);

$m3 = new Mago;
$m3->__set("nome", "Kleiton");
$m3->__set("magia", "Negra");
echo $m3->escrever();
unset($m3);

$m4 = new Mago;
$m4->__set("nome", "Kalvin");
$m4->__set("magia", "Eletrica");
echo $m4->escrever();
unset($m4);










?>