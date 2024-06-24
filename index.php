<?php

include __DIR__ . "/models/Movie.php";


$revenant = new Movie("Revenant", 2015, "EN", "Netfilx", "./img/The_Revenant.png");


$ilPadrino = new Movie("The Godfather", 1972, "EN", "Netfilx", "./img/Don_Vito_Corleone.jpg");

$movies = [$revenant, $ilPadrino];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>

<body>

    <div class="container">
        <h1>Movies</h1>

        <img src="<?= $revenant->getImg() ?>" alt="">
        <ul>
            <li><?= "Titolo: $revenant->titolo" ?></li>
            <li><?= "Anno: $revenant->annoDiProduzione" ?></li>
            <li><?= "Lingua: $revenant->lingua" ?></li>
            <li><?= "Piattaforma: $revenant->piattaforma" ?></li>
        </ul>

        <img src="<?= $ilPadrino->getImg() ?>" alt="">
        <ul>
            <li><?= "Titolo: $ilPadrino->titolo" ?></li>
            <li><?= "Anno: $ilPadrino->annoDiProduzione" ?></li>
            <li><?= "Lingua: $ilPadrino->lingua" ?></li>
            <li><?= "Piattaforma: $ilPadrino->piattaforma" ?></li>
        </ul>

        <div>
            <?php foreach ($movies as $film) { ?>
                <img src="<?= $film->getImg() ?>" alt="">
                <ul>
                    <li><?= "Titolo: $film->titolo" ?></li>
                    <li><?= "Anno: $film->annoDiProduzione" ?></li>
                    <li><?= "Lingua: $film->lingua" ?></li>
                    <li><?= "Piattaforma: $film->piattaforma" ?></li>
                </ul>
            <?php } ?>
        </div>

    </div>

</body>

</html>