<?php
    //classe pai
    class Pessoa {
        public $nome;
        public $tipo;

        public function mostrarTipo() {
            echo "A pessoa $this->nome é do tipo $this->tipo <br>";
        }
    }

    class PessoaComum extends Pessoa {
        public $cpf;
    }

    class Empresa extends Pessoa {
        public $cnpj;
    }

    $pessoa = new PessoaComum();
    $pessoa->nome = 'Matheus Bidu';
    $pessoa->tipo = 'física';

    $empresa = new Empresa();
    $empresa->nome = 'Sport Club Corinthians Paulista';
    $empresa->tipo = 'jurídica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();

?>