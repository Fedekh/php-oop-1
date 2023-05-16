<?php
include_once __DIR__ . '/Genres.php';
include_once __DIR__ . '/database.php';


class Movie
{
    // proprietà    
    public $title;
    public $genres;
    public $year;

   
    function __construct($_title,$_genres)
    {
        $this->title = $_title;
        $this->genres= $_genres;
    }


    // metodi
    public function giveMeInfo()
    {
        echo " Hai scelto come film <br> {$this->title} <br> ";
        echo "I generi sono : . {$this->genres->giveGenres()}";
        
    }
}
