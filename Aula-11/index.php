<?php

/**
 * [Aula - 11 - Polimorfismo]
 * 
 */

class Animal {
    
    public function Andar()
    {
        echo "O animal andou...";
    }

    public function Correr()
    {
        echo "O animal correu...";
    }
}

class Cavalo extends Animal {

    public function Andar()
    {
        echo "O cavalo andou...";
    }

    public function Run()
    {
        $this->Correr();
    }

}

// $animal = new Animal();
// $animal->Andar();

$cavalo = new Cavalo();
$cavalo->Andar();
echo "<br>";
$cavalo->Run();