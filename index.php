<?php

class Pessoa {
    public $idade;
    public $name;
    
    public function Falar($name, $idade)
    {
        // $name = 'Clerison Oliveira';
        // $idade = 40;
        echo "Nome: " . $name . "</br> Idade: " . $idade;
    }  
    
}

$clerison = new Pessoa();

$clerison->name = "Clerison Oliveira Da Silva";
$clerison->idade = 40;
$clerison->Falar("Clerison","40");


// echo $clerison->name;

// var_dump($clerison);