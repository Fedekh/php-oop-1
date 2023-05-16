<?php
include_once __DIR__ . '/../Models/database.php';
?>

<main>
    <ul class="container">
        <?php foreach ($films as $film) { ?>
            <li>
                <?php $film->giveMeInfo(); ?>
            </li>
        <?php } ?>
    </ul>
</main>

