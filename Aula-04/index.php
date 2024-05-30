<?php

/**
 * [Aula - 04 - Construtor]
 */

 class Login {
    private $name;
    private $email;
    private $senha;

    // Torna obrigatorio os dados na construção da classe
    public function __construct($name, $email, $senha)
    {
        $this->name  = $name;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($n){
        $this->name = $n;
    }  
    
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

 $logar = new Login("clerison", "teste@teste.com", "teste");

 $logar->Logar();

 echo "<br> Acessado por: " . htmlspecialchars($logar->getName()) . 
     " E-mail: " . htmlspecialchars($logar->getEmail());

