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
