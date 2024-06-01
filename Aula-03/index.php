<?php

/**
 * [Aula - 03 - Getters and Setters]
 */

 class Acessar {
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

 $logar = new Acessar();

//  $logar->email = "teste@teste.com.br";
//  $logar->senha = "teste000";
$logar->setEmail("teste@teste.com");
$logar->setSenha("teste");

 $logar->Logar();

 echo "</br> Acessado por: </br> Email: " . $logar->getEmail();
