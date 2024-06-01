<?php

/**
 * [Aula - 13 - Namespaces]
 * 
 */


 require "../Aula-13/classes/produto.php";
 require "../Aula-13/models/produto.php";

 use classes\Produto as productClass;
 use models\Produto as productModels;

 $produtos = new productClass();
 echo $produtos->viewDetails();
 
 echo "</br>";

 $modelos = new productModels();
 echo $modelos->viewDetails();
