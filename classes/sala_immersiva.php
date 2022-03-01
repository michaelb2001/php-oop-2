<?php

include_once __DIR__.'/classes/sala.php';

class Sala_immersiva extends Sala{

    private $effetti = [];

    public function __construct($_nome,$_n_posti,$_effetti){
        parent::__construct($_nome,$_n_posti);
        $this->effetti = $_effetti;
    }
}

?>