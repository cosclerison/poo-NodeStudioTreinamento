<?php

/**
 * [Aula - 09 - Constantes, Self e Parent]
 * 
 */

class Pessoa {
    //  Declarando uma contante
    const name = "Clerison";

    public function Exibir()
    {
        echo self::name;
    }
}

class Clerison extends Pessoa {
    
    const name = "Oliveira";

    public function Exibir()
    {
        echo parent::name;
    }
}

$pessoa = new Pessoa();
$pessoa->Exibir();

$clerison = new Clerison();
$clerison->Exibir();