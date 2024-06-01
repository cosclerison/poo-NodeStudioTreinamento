<?php

/**
 * [Modo de mostrar os erros em tela apenas deste arquivo
 * bastante utilizado para debugar algo]
 * ini_set('display_errors', 1);
 * error_reporting(E_ALL);
 */

/**
 * [Aula - 07 - Modificadores de Acesso 02]
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

    private function Andar()
    {
        echo " Andou ";
    }

    protected function Parar()
    {
        echo " Parou ";
    }

    public function verificarMovimento()
    {
        $this->Andar();
    }

 } 
 
 class Carro extends Veiculo {

    public function limpadorparabrisa()
    {
        echo "Limpando 3x...";
    }

    public function verificarAcao()
    {
        $this->Parar();
    }
 }

$carro = new Carro();
$carro->verificarMovimento();
$carro->verificarAcao();

