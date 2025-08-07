<?php

    class Pessoa {
        //Opcções de Encapsulamento
        //public - A variável é acessível de fora da classe 
        //private - É acessível somente dentro da classe
        //protected - É acessível somente por herança
        public $nome;
        public $idade;

        public function apresentar() {
            echo "Olá, meu nome é $this->nome";
            echo "<hr>";
            echo "Tenho $this->idade anos";
            echo "<hr>";
        }
    }

    $aluno1 = new  Pessoa();
    $aluno1->nome = 'Memphis Depay';
    $aluno1->idade = 31;
    $aluno1->apresentar();

    $aluno2 = new  Pessoa();
    $aluno2->nome = 'Yuri Alberto';
    $aluno2->idade = 24;
    $aluno2->apresentar(); 

?>