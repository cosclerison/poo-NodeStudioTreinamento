<?php

/**
 * [Aula - 17 - Relação entre os objetos (Agregação)]
 * Agregação
 * Na agregação, uma classe precisa de outra para executar a ação,
 * uma classe utiliza outra como parte de si própria
 */

 class Products {
   public $name;
   public $price;

   public function __construct($name, $price)
   {
      $this->name  = $name;
      $this->price = $price;
   }
 }

 class Cart {
   
   public $products;

   public function add(Products $product)
   {
      $this->products[] = $product;
   }

   public function view()
   {
      foreach($this->products as $product) {
         echo "Produto: " . $product->name  . " Valor R$ " . number_format($product->price, 2, ",", ".") ."<hr>";
      }
   }

 }

 $product1 = new Products("Mouse", "1898");
 $product2 = new Products("Notebook", "5000");
 $product3 = new Products("Keyboard", "150");
 $product4 = new Products("Monitor", "898");
 
 $cartOrder = new Cart();
 $cartOrder->add($product1);
 $cartOrder->add($product2);
 $cartOrder->add($product3);
 $cartOrder->add($product4);
 $cartOrder->view();