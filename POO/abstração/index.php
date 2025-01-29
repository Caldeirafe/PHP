<?php
//CLASSE
class Veiculo {

    //Atributos
    public $nome;
    public $marca;
    public $tipo;


    //Metodos
    public function resumirCad(){
        return "$this->marca possui $this->nome tipo $this->tipo";
    }

    public function setAtributos($nome, $marca, $tipo){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tipo = $tipo;
    }
}

$v1 = new Veiculo;
$v2 = new Veiculo;
$v3 = new Veiculo;

$v1 -> setAtributos('Civic', 'Honda', 'carro');
$v2 -> setAtributos('Corola', 'Toyota', 'carro');
$v3 -> setAtributos('Titan', 'Honda', 'moto');

echo $v1-> resumirCad();
echo $v2-> resumirCad();
echo $v3-> resumirCad();

?>