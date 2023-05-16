<?php

class Poster
{
    public $poster;

    
    function __construct($_poster)
    {
        $this->poster = $_poster; // assegno il valore della proprietà poster
    }

    public function givePoster()
    {
        echo "<img src='{$this->poster}' alt=''>";
    }
}
