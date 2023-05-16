<?php

include_once __DIR__ . '/Movie.php';
include_once __DIR__ . '/Genres.php';

$genre= new Genres(['Azione', 'Thriller','horror']);


$films = [
    new Movie('Matrix 1', new Genres(['Azione', 'Thriller','horror'])),
    new Movie('Jumanji', new Genres(['Azione', 'Giallo','horror'])),
    new Movie('Ace Ventura', new Genres(['Azione', 'Comedy','horror']))
];
