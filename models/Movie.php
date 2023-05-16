<?php
class Movie
{
    // proprietà    
    public $title;
    public $genres;
    public $year;

   
    function __construct($_title, $_year, Genres $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres= $_genres;
    }


    // metodi
    public function giveMeInfo()
    {
        echo " <h3>Hai scelto come film :</h3> <span class='title'>" . "{$this->title}" . "</span>" ."<br> ";
        echo "<h4> Uscito nel: </h4> <p class='year'> {$this->year} </p>";
        echo $this->genres->giveGenres();
        
    }
}
