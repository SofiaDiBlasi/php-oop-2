<?php  

    Class Tipologia{
        public $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }

        public function getName(){
            return  $this->nome;
        }
    }
?>