<?php

/**
 * [Aula - 05 - Herança]
 * Herença é um recurso que permite que classes 
 * compartilhem atributos e métodos de codigo ou 
 * comportamento generalizados
 */

 class Veiculo {
    public $modelo;
    public $marca;
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

 } 
 
 class Carro extends Veiculo {

    public function limpadorparabrisa()
    {
        echo "Limpando 3x...";
    }
 } 
 
 class moto extends Veiculo {

    public function Bagageiro()
    {
        echo "Bagageiro livre";
    }

 }

 $carro = new Carro();
 $moto  = new moto();

 $carro->modelo = 'Corsa';
 $carro->marca  = 'GM';
 $carro->ano    = '2010';
 $carro->cor    = 'Azul';
 $carro->limpadorparabrisa();
 var_dump("</br>", $carro, "</br>");
 $carro->Andar();
 
 $moto->modelo  = 'Ninja';
 $moto->marca   = 'Kawasaki';
 $moto->ano     = '2024';
 $moto->cor     = 'Vermelha';
 $moto->Bagageiro();
 var_dump("</br>", $moto, "</br>");
 $moto->Andar();

