<?php

    class Autor {
        private $id;
        private $nome;
        private $biogorafia;
        private $foto;

        public function __construct($nome, $biogorafia, $foto){
            $this->nome = $nome;
            $this->biogorafia = $biogorafia;
            $this->foto = $foto;
        }

        public function inserir (){ 
            $stmt = $pdo->prepare("INSERT INTO autor (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
	        $stmt->bindParam(':nome', $nome);
	        $stmt->bindParam(':biografia', $biografia);
	        $stmt->bindParam(':foto', $foto);
	        $stmt->execute();
        }

        public function buscar ($id) { 
            $stmt = $pdo->query("SELECT * FROM autor WHERE id = $id");
	        $autores = $stmt->fetchAll();
        }

        public function buscarTodos () { 
            $stmt = $pdo->query("SELECT * FROM autor");
	        $autores = $stmt->fetchAll();
        }

        public function atualizar ($id, $nome, $biografia, $foto) { 
            $stmt = $pdo->prepare("UPDATE autor SET nome = :nome, biografia = :biografia, foto = :foto  WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':biografia', $biografia);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute();
        }

        public function deletar ($id) { 
            $stmt = $pdo->prepare('DELETE FROM autor WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }

?>