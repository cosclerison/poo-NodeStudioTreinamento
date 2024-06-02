<?php

/**
 * [Aula - 16 - Relação entre os objetos (Associação)]
 * Associação
 * Acontece quando um objeto "utiliza" outro, porém sem que eles dependam um do outro.
 */

 class Pedido {
    public $number;
    public $client;
 }

 class Client {
    public $name;
    public $address;
 }

 $client = new Client();
 $client->name      = "Clerison Oliveira";
 $client->address   = "Street Saint, 600";

 $pedido = new Pedido();
 $pedido->number = "8484";
 $pedido->client = $client;

 $data = array(
    "numero"           => $pedido->number,
    "cliente"          => $pedido->client,
    "nome_cliente"     => $pedido->client->name,
    "endereço_cliente" => $pedido->client->address,
 );

 var_dump($data);