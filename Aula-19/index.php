<?php

/**
 * [Aula - 19 - Métodos Mágicos]
 * CLONE
 * CONSTRUCT
 * INVOKE
 * TOSTRING
 * GET
 * SET
 */

 class Pessoa {
  //  private $name;
   private $data = array();

  //  public function __set($name, $value)
  //  {
  //     $this->name = $value;
  //  }

  //  public function __get($name)
  //  {
  //   return $this->name;
  //  }

   public function __set($name, $value)
   {
      $this->data[$name] = $value;
   }

   public function __get($name)
   {
    return $this->data[$name];
   }

   public function __toString()
   {
    return "<h1>Tentei imprimir o OBJETO!</h1>";
   }
  
  public function __invoke()
  {
     return "<h2>Objeto com função.</h2>";
  }

 }

 $pessoa = new Pessoa();
 $pessoa->name  = "Clerison Oliveira";
 $pessoa->idade = "23";
 $pessoa->sexo  = "M";

 echo "name: "  . $pessoa->name  . "<br>";
 echo "idade: " . $pessoa->idade . "<br>";
 echo "sexo: "  . $pessoa->sexo  . "<br>";

 echo $pessoa;
 
 echo $pessoa();