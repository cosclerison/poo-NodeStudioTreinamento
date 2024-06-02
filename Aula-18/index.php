<?php

/**
 * [Aula - 18 - Relação entre os objetos (Composição)]
 * Composição
 * Na composição, uma classe cria a instancia de outra classe dentro de si propria,
 * sendo assim, quando ela for destruída, a outra classe também será
 */

 class Human {
   public function addName($name)
   {
      return "O nome da pessoa é: " . $name;
   }
 }

 class ViewHuman {
   public $human;
   public $name;

   public function __construct($name)
   {
      $this->human = new Human();
      $this->name  = $name;
   }

   public function viewName()
   {
      echo $this->human->addName($this->name);
   }

 }

 $human = new ViewHuman("Clerison");
 $human->viewName();