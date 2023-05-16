<?php
include_once __DIR__ . '/Movie.php';
include_once __DIR__ . '/Genre.php';
include_once __DIR__ . '/Poster.php';


$films = [
    new Movie('Matrix 1', 1999, new Genres(['Azione', 'Fantascienza','Avventura']), new Poster('https://www.warnerbros.it/wp-content/uploads/2015/09/Matrix_Poster.jpg')),
    new Movie('Jumanji', 1994 , new Genres(['Avventura', 'Commedia','Thriller']),new Poster('https://filmalibri.it/wp-content/uploads/2021/05/jumanji-3.jpg')),
    new Movie('Ace Ventura', 1992, new Genres(['Commedia', 'Azione','Slapstick']),new Poster('https://m.media-amazon.com/images/M/MV5BYmVhNmFmOGYtZjgwNi00ZGQ0LThiMmQtOGZjMDUzNzJhMGIzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg'))
];
