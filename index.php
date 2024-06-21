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

    public function __construct($titolo, $annoDiProduzione, $lingua, $piattaforma, $copertina)
    {
        $this->titolo = $titolo;
        $this->annoDiProduzione = $annoDiProduzione;
        $this->lingua = $lingua;
        $this->piattaforma = $piattaforma;
        $this->copertina = $copertina;
    }
}

$revenant = new Movie("Revenant", 2015, "EN", "Netfilx", "./img/The_Revenant.png");


$ilPadrino = new Movie("The Godfather", 1972, "EN", "Netfilx", "./img/Don_Vito_Corleone.jpg");


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