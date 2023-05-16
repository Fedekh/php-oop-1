<?php

include_once __DIR__ . '/Models/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <link rel="stylesheet" href="./css/style.css">
    <title>MOVIE</title>
</head>

<body>

    <header>

        <div class="container">
            <h1>MOVIES</h1>
        </div>
    </header>

    <main>
        
        <ul class="container">
            <?php foreach ($films as $film) { ?>
                <li>
                    <?php $film->giveMeInfo() ; ?>
                </li>

            <?php } ?>
        </ul>


    </main>



</body>

</html>