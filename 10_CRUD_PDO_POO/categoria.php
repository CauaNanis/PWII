<?php

    class Categoria {
        private $id;
        private $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }

        public function inserir (){ 
            $stmt = $pdo->prepare("INSERT INTO categoria (nome) VALUES (:nome)");
	        $stmt->bindParam(':nome', $nome);
	        $stmt->execute();
        }

        public function buscar ($id) { 
            $stmt = $pdo->query("SELECT * FROM categoria WHERE id = $id");
	        $categorias = $stmt->fetchAll();
        }

        public function buscarTodos () { 
            $stmt = $pdo->query("SELECT * FROM categoria");
	        $categorias = $stmt->fetchAll();
        }

        public function atualizar ($id, $nome) { 
            $stmt = $pdo->prepare("UPDATE categoria SET nome = :nome  WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->execute();
        }

        public function deletar ($id) { 
            $stmt = $pdo->prepare('DELETE FROM categoria WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }

?>