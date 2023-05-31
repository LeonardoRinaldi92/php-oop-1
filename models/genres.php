<?php

class Genres {
    public $genres;

    function __construct($_genres){
        $this->genres = $_genres;
        
    }

    public function setGenres($nuovoGen) {
        $this->genres = $nuovoGen;
    }
}



?>