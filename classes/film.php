<?php

class Film{

    private $nome;
    private $lingua;
    private $autore;
    private $durata;

    public function __construct($_nome){
        $this->nome = $_nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLingua(){
        return $this->lingua;
    }

    public function getAutore(){
        return $this->autore;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setLingua($_lingua){
        $this->nome = $_lingua;
    }

    public function setAutore($_autore){
        $this->nome = $_autore;
    }

    public function setDurata($_durata){
        $this->nome = $_durata;
    }
}

?>