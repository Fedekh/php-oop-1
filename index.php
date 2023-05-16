<?php
include_once __DIR__ . '/models/Movie.php';
    
    $film1 = new Movie('Matrix', 'Fantasy', 'horror', 'comedy', 'thriller', 'drama');
    $film2 = new Movie('Blade', 'Comedy');
    var_dump($film1) .  "<br>";
    var_dump($film2) .  "<br>";

    echo ($film1->giveMeInfo()).  "<br>" .  "<br>";
    echo ($film2->giveMeInfo()).  "<br>";



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