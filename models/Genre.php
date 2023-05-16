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
        echo "<h4> I cui generi associati sono: </h4> <p>  {$genresString}</p>";
    }
}
