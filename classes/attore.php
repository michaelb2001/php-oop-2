<?php


class Attore{

    private $nome;
    private $cognome;
    private $nazionalita;

    public function __construct($_nome,$_cognome){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }

    
    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getNazionlita(){
        return $this->nazionlita;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setCognome($_cognome){
        $this->cognome = $_cognome;
    }

    public function setNazionalita($_nazionalita){
        $this->nazionalita = $_nazionalita;
    }

}
?>