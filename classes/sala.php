<?php


class Sala{

    private $nome;
    private $n_posti;

    public function __construct($_nome,$_n_posti){
        $this->nome = $_nome;
        $this->n_posti = $_n_posti;
    }

    
    public function getNome(){
        return $this->nome;
    }

    public function getNposti(){
        return $this->n_posti;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setNposti($_n_posti){
        $this->n_posti = $_n_posti;
    }

}
?>