<?php

include_once __DIR__.'/classes/sala.php';

class Sala_immersiva extends Sala{

    private $effetti;

    public function __construct($_nome,$_n_posti){
        $this->nome = $_nome;
        $this->n_posti = $_n_posti;
        $this->effetti = [
            "acqua",
            "temperatura",
            "fumo",
            "scossa"
        ];
    }
}

?>