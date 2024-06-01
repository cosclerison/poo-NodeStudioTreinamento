<?php

/**
 * [Aula - 15 - Tratamento de Exceções]
 * Ocorrência anormal que afeta o funcionamento da aplicação
 * exception é a classe de base para todas as exceptions
 * message, code, line e file
 */

 class Newsletter {

    public function addEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Este E-mail " . $email . " não é válido!!!", 18789);
        } else {
            echo $email . " Cadastrado com sucesso!!!";
        }
    }
 }

 $newsletter = new Newsletter();

 try {
    # code...
    $newsletter->addEmail('cosclerisongmail.com');
 } catch (\Exception $e) {
    # code...
    echo "Message: " . $e->getMessage() . "</br>";
    echo "Code: "    . $e->getCode()    . "</br>";
    echo "File: "    . $e->getFile()    . "</br>";
    echo "Line: "    . $e->getLine()    . "</br>";
 }