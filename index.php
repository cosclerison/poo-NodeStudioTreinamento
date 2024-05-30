<?php

/**
 * [Aula - 02 - Classes, Atributos e Métodos]
 */

// class Pessoa {
//     public $idade;
//     public $name;
    
//     public function Falar($name, $idade)
//     {
//         // $name = 'Clerison Oliveira';
//         // $idade = 40;
//         echo "Nome: " . $name . "</br> Idade: " . $idade;
//     }  
    
// }

// $clerison = new Pessoa();

// $clerison->name = "Clerison Oliveira Da Silva";
// $clerison->idade = 40;
// $clerison->Falar("Clerison","40");

// echo $clerison->name;

// var_dump($clerison);

/**
 * [Aula - 03 - Getters and Setters]
 */

 class Login {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar()
    {
        if($this->email == "teste@teste.com" and $this->senha == "teste"):
            echo $this->email . " Logado com sucesso";
        else:
            echo "Email ou Senha invalido!!!";
        endif;
    }
 }

 $logar = new Login();

//  $logar->email = "teste@teste.com.br";
//  $logar->senha = "teste000";
$logar->setEmail("teste@teste.com");
$logar->setSenha("teste");

 $logar->Logar();

 echo "</br> Acessado por: </br> Email: " . $logar->getEmail();
