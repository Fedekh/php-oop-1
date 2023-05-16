<?php
include_once __DIR__ . '/Movie.php';
include_once __DIR__ . '/Genre.php';

$films = [
    new Movie('Matrix 1', 1999, new Genres(['Azione', 'Thriller','horror'])),
    new Movie('Jumanji', 1994 , new Genres(['Azione', 'Giallo','horror'])),
    new Movie('Ace Ventura', 1992, new Genres(['Azione', 'Comedy','horror']))
];
