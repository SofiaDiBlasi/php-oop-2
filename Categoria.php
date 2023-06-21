<?php  
    Class Categoria{

        public $animale;
        public $icona;

        public function __construct($animale, $icona){
            $this->animale = $animale;
            $this->icona = $icona;
        }
        public function getAnimale(){
            return  $this->animale;
        }
        public function getIcona(){
            return  $this->icona;
        }
    }
?>