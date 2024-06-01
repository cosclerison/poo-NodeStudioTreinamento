<?php

// phpinfo();

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

/**
 * [Aula - 06 - Modificadores de Acesso]
 * 
 * PUBLIC = Fará  com que não haja  ocultação nenhuma da função,
 *  toda propriedade ou método declarado como PUBLIC serão acessíveis 
 *  por todos que quiserem acessa-los
 * 
 * PROTECTED = Visibilidade PROTECTED faz com que todos os herdeiros 
 *  vejam as propriedades ou métodos protegidos como se fosse públicos
 *  ou seja se torna publico apenas para os seus herdeiros
 * 
 * PRIVATE = Ao contrario do public, esse modificador faz com que 
 *  qualquer método ou propriedade seja visível somente pela classe que o declarou
 */

 class Veiculo {
    protected $modelo;
    private $marca;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo " Andou ";
    }

    public function Parar()
    {
        echo " Parou ";
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        return $this->modelo = $m;
    }
    
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($m)
    {
        return $this->marca = $m;
    }

 } 
 
 class Carro extends Veiculo {

    public function limpadorparabrisa()
    {
        echo "Limpando 3x...";
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        return $this->modelo = $m;
    }

 } 
 
 class moto extends Veiculo {

    public function Bagageiro()
    {
        echo "Bagageiro livre";
    }

 }

$veiculo = new Veiculo();
$veiculo->setModelo('UNO');
$veiculo->setMarca('FIAT');
echo $veiculo->getModelo();

var_dump($veiculo);

