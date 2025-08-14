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

        public function inserir (){ }

        public function buscar ($id) { }

        public function buscarTodos () { }

        public function atualizar ($id) { }

        public function deletar ($id) { }
    }

?>