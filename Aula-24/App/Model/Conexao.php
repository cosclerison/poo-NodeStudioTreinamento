<?php


/**
 * [Aula - 24 - CRUD com PDO, Singleton e Autoload #1]
 */


class Conexao {

    private static $instance;

    public static function getConnect()
    {
        if(!isset(self::$instance)) {
            self::$instance = new PDO(
                "mysql:host=localhost;dbname=pdo_node_studio;charset=utf8;",
                "root",
                "root"
            );
        } else {
            return self::$instance;
        }
    }
}