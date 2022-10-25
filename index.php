<?php
    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $prezzo;
        public $review;

        function _construct($_titolo, $_genere, $_prezzo){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->prezzo = $_prezzo;
            $this->setReview($_review);
        }

        public function setReview($_review){
            
        }
    }




?>