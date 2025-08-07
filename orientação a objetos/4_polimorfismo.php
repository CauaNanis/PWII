<?php

    class Forma {
        public function desenhar () {
            echo "Pintnado algo";
        }
    }

    class Circulo extends Forma {
        public function desenhar() {
            echo "Pintando Bobbie Goods";
        }
    }

    $figura = new Circulo();
    $figura->desenhar();

    class Bullet {
        public $direction;
        public $height;
        public $with;
        public $weight;
        public $lenght;
        public $x;
        public $y;
        public $z;

        public function moveFarward(){
            $this->x = $this->x + 10;
        }
    }

?>