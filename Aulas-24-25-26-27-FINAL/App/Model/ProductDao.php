<?php

/**
 * [Aula - 24 - CRUD com PDO, Singleton e Autoload #1]
 */

 namespace App\Model;
 
 class ProductDao {

     public function create(Product $p) {
         try {
             $sql = 'INSERT INTO tproduct (name, description) VALUES (?, ?)';
 
             $stmt = Conexao::getConnect()->prepare($sql);

             $stmt->bindValue(1, $p->getName());
             $stmt->bindValue(2, $p->getDescription());
             
             $stmt->execute();
             $stmt->closeCursor(); // Fecha o cursor do statement para liberar recursos
 
             echo "Produto inserido com sucesso!";
         } catch (\PDOException $e) {
             echo "Erro ao inserir produto: " . $e->getMessage();
         }
     }

    public function read()
    {
        $sql = "SELECT * FROM tproduct";

        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }

    }

    public function update(Product $p)
    {
        $sql = "UPDATE tproduct SET name = ?, description = ? WHERE id = ?";

        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->bindValue(1, $p->getName());
        $stmt->bindValue(2, $p->getDescription());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tproduct WHERE id = ?";

        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
 }
