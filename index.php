<?php

class Movie
{
    public $titolo;
    public $annoDiProduzione;
    public $lingua;
    public $piattaforma;
    public $copertina;

    public function getImg()
    {
        $percorso = $this->copertina;
        return $percorso;
    }
}

$revenant = new Movie();
$revenant->titolo = "Revenant";
$revenant->annoDiProduzione = 2015;
$revenant->lingua = "EN";
$revenant->piattaforma = "Netfilx";
$revenant->copertina = "./img/The_Revenant.png";

$ilPadrino = new Movie();
$ilPadrino->titolo = "The Godfather";
$ilPadrino->annoDiProduzione = 1972;
$ilPadrino->lingua = "EN";
$ilPadrino->piattaforma = "Netfilx";
$ilPadrino->copertina = "./img/Don_Vito_Corleone.jpg";




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

    </div>

</body>

</html>