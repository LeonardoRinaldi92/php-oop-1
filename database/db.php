<?php
require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/genres.php';

$arrayFilm = [
    new Movie('The Matrix','1999','136',[new Genres('Sci-fi'), new Genres('Azione')])
]

?>