<?php
include_once __DIR__ . '/poster.php';
class Movie
{
    // proprietà    
    public $title;
    public $genres;
    public $year;
    public $posters;

   
    function __construct($_title, $_year, Genres $_genres , $_poster)
    {
        $this->title = $_title;        
        $this->year = $_year;    
        $this->genres= $_genres;    
        $this->posters = $_poster;   
    }


    // metodi
    public function giveMeInfo()
    {
        echo " <h3>Hai scelto come film :</h3> <span class='title'>" . "{$this->title}" . "</span>" ."<br> ";   // stampo il titolo tramite la proprietà title
        echo "<h4> Uscito nel: </h4> <p class='year'> {$this->year} </p>";  // stampo l'anno tramite la proprietà year
        echo $this->genres->giveGenres();       // richiamo il metodo giveGenres() della classe Genres per stampare i generi
        echo $this->posters->givePoster();      // richiamo il metodo givePoster() della classe Poster per stampare il poster
        
    }
}
