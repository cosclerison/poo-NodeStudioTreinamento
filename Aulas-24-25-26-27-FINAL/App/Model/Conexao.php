<?php

/**
 * [Aula - 24 - CRUD com PDO, Singleton e Autoload #1]
 */

namespace App\Model;

class Conexao {
    private static $instance;

    public static function getConnect() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO(
                    "mysql:host=localhost;dbname=pdo_node_studio;charset=utf8;",
                    "root",
                    "root"
                );
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo "Erro de conexão: " . $e->getMessage();
            }
        }

        return self::$instance;
    }
}
