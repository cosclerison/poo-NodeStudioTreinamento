<?php

/**
 * [Aula - 24 - CRUD com PDO, Singleton e Autoload #1]
 */

 namespace App\Model;

 class Product {
    private $id;
    private $name;
    private $description;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
 }