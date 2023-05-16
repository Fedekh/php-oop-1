<?php
    class Movie{
        public $title;
        public $genre;
        public $year;
        public $language;
        public $country;
        // public $director;
        // public $rated;
        // public $cast;
        // public $poster;
        // public $website;
        // public $awards;
        function __construct( $_title, $_genre)
        {
            $this->title = $_title;
            $this->genre = $_genre;
        }

        

    }

    $film1 = new Movie('Matrix', 'Fantasy');
    $film2 = new Movie('Blade', 'Comedy');
    var_dump($film1) .  "<br>";
    var_dump($film2) .  "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="color-scheme" content="dark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>