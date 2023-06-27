<?php  

    include "./traits/Peso";
    include "./traits/Cibo";
    Class Prodotto{
        
        use Peso;
        use Cibo;
        public $nome;
        public $prezzo;
        public $immagine;
        public $tipologia;
        public $categoria;


        public function __construct($nome,$prezzo,$immagine,Tipologia $tipologia,Categoria $categoria){
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->immagine = $immagine;
            $this->tipologia = $tipologia;
            $this->categoria = $categoria;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getPrezzo(){
            return $this->prezzo;
        }
        public function getImmagine(){
            return $this->immagine;
        }
        public function getTipologia(){
            return $this->tipologia;
        }
        public function getCategoria(){
            return $this->categoria;
        }
    }
?>