<?php

include_once __DIR__.'/classes/film.php';

class Spettacolo {

    private $nome_film;
    private $durata;
    private $ora_di_inizio;
    private $sala;

    public function __construct($_nome_film,$_durata,$_ora_di_inizio,$_sala){
        $this->nome_film = $_nome_film;
        $this->durata = $_durata;
        $this->ora_di_inizio = $_ora_di_inizio;
        $this->sala = $_sala;
    }

    public function getNomeFilm(){
        return $this->nome_film ;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function getOraDiInizio(){
        return $this->ora_di_inizio;
    }

    public function setNomeFilm($_nome_film){
        $this->nome_film = $_nome_film;
    }

    public function setDurata($_durata){
        $this->durata = $_durata;
    }

    public function setOraDiInizio($_ora_di_inizio){
        $this->ora_di_inizio = $_ora_di_inizio;
    }

}
?>