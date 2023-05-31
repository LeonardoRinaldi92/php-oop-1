<?php 

class Movie {
    public $title;
    public $year;
    public $time;
    public $genres;

    function __construct($_title, $_year, $_time, $_genres){
        $this->title = $_title;
        $this->year = $_year;
        $this->time = $_time;
        $this->genres = $_genres;
        
    }

    public function setTitle($nuovoTitolo) {
        $this->title = $nuovoTitolo;
    }
}

?>