<?php

class Genres
{
    public $genres;

    function __construct($_genres)
    {
        $this->genres = $_genres;
    }

    public function giveGenres()
    {
        $genresString = implode(", ", $this->genres);
        echo " I cui generi associati sono: <p>  {$genresString}</p>";
    }
}
