<?php

/**
 * [Aula - 14 - Referência e Clonagem de Objetos]
 * 
 */

class Pessoa {
    public $idade;

    /**
     * [__clone description]
     * esta function é chamada quando utilizamos o 
     * método clone na chamada de alguma function ou atributo da classe
     */ 
    public function __clone()
    {
        echo "Clonagem de OBJETO...";
    }
}

$idade = new Pessoa();
$idade->idade = 40;

$idade2 = clone $idade;
$idade->idade = 36;

echo "<br> idade: " . $idade->idade;
echo "<br> idade2: " . $idade2->idade;