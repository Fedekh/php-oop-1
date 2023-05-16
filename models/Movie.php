<?php
// include_once __DIR__ . '/Genres.php';
// include_once __DIR__ . '/database.php';


class Movie
{
    // proprietà    
    public $title;
    public $genres;
    public $year;

   
    function __construct($_title, Genres $_genres)
    {
        $this->title = $_title;
        $this->genres= $_genres;
    }


    // metodi
    public function giveMeInfo()
    {
        echo " Hai scelto come film : <span class='title'>" . "{$this->title}" . "</span>" ."<br> ";
        echo $this->genres->giveGenres();
        
    }
}
