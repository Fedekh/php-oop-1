<?php

class Movie
{
    // proprietà    
    public $title;
    public $genres;
   
     //costruttore milestone 0
    // function __construct($_title, $_genre)
    // {
    //     $this->title = $_title;
    //     $this->genre = $_genre;
    // }


    // costruttore bonus 1, operatore variadic (...) permette di passare un numero indefinito di argomenti
    function __construct($_title, ...$_genres)
    {
        $this->title = $_title;
        $this->genres = $_genres;
    }

    // metodi
    public function giveMeInfo()
    {
        // implode() è una funzione che trasforma un array in una stringa, il cui separatore è una virgola
        $genresString = implode(", ", $this->genres);   
        return " Hai scelto come film <br> {$this->title} <br> I cui generi associati sono: <br> {$genresString}";
    }
}
?>