<?php

include_once __DIR__.'/classes/attore.php';

class Film{

    private $nome;
    private $lingua;
    private $autore;

    private $attori = [];

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

    public function getAttori(){
        return $this->attori;
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

    public function setAttore($_nome,$_cognome){
        array_push($this->attori,new Attore($_nome,$_cognome));
    }

}

?>