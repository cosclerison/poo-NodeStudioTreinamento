<?php

/**
 * [Aula - 24 - CRUD com PDO, Singleton e Autoload #1]
 */

 require __DIR__ . '/vendor/autoload.php';

use App\Model\Product;
use App\Model\ProductDao;

$product = new Product();
$product->setId(7);
$product->setName("GABINETE");
$product->setDescription("NINJA");

$productDao = new ProductDao();

// $productDao->create($product);
// $productDao->update($product);
$productDao->delete(6);

$products = $productDao->read();
// Agora podemos iterar sobre os produtos e exibir seus nomes
foreach($products as $product) {
    echo "# " . $product['id']." " . $product['name'] . "<br>".$product['description'] . "<hr>";
}