<?php
    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $prezzo;
        public $review;

        function __construct($_titolo, $_genere, $_prezzo, $_review){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->prezzo = $_prezzo;
            $this->setReview($_review);
        }

        public function setReview($_review){
            $this->review = $_review;
        }
    }


    $avatar = new Movie("Avatar", 'Fantasy', '9,99€', 8.5);
    echo ($avatar->prezzo . '<br>');
    var_dump($avatar);

    $batman = new Movie('Batman il cavaliere oscuro', 'Fantasy', '5,99€', 8.7);
    var_dump($batman);



?>