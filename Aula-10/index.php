<?php


/**
 * [Aula - 10 - Métodos e Atributos Estáticos]
 * 
 */

class Login {

    public static $user;

    public static function verificaLogin()
    {
        echo "<br> O Usuário " . self::$user . " está logado!!!";
    }

    public function logout()
    {
        echo "<br> O    Usuário " . self::$user . " saiu!!!";
    }

}

Login::$user = "<strong>Clerison Oliveira</strong>";
Login::verificaLogin();

$usuario = new Login();
$usuario->logout();