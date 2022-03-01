<?php


/*
4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.
*/

include_once __DIR__.'/classes/sala.php';
include_once __DIR__.'/classes/sala_immersiva.php';
include_once __DIR__.'/classes/film.php';
include_once __DIR__.'/classes/attore.php';
include_once __DIR__.'/classes/spettacolo.php';

$cinemaMultiSala = [
    new Sala("sala1",80),
    new Sala("sala2",120),
    new Sala("sala3",90),
    new Sala("sala4",60),
    new Sala_immersiva("sala5",80,["fumo","vibrazione"])
];

$film1 = new Film("la banda dei babbi natale");

$film1->setAttore("Aldo","Baglio");
$film1->setAttore("Giovanni","Poretti");
$film1->setAttore("Giacomo","Storti");

$spettacolo1 = new Spettacolo($film1->getNome(),"sabato",1.30,20.35,$cinemaMultiSala[0]->getNome());
$spettacolo2 = new Spettacolo($film1->getNome(),"sabato",1.30,17.35,$cinemaMultiSala[3]->getNome());

$arraySpettacoli = [];

array_push($arraySpettacoli,$spettacolo1,$spettacolo2);

$capienzaCinama; 

$array_orari=[];

array_push($array_orari,$spettacolo1->getOraDiInizio(),$spettacolo2->getOraDiInizio());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>INFORMAZIONI CINEMA</h1>
    
    <h2>INFORMAZIONI SALE</h2>

    <p><?php 
        foreach($cinemaMultiSala as $sala){
        if(method_exists($sala,'getEffetti')){
            echo "<div class='info_sala'>{$sala->getNome()} {$sala->getNposti()} ";
            foreach($sala->getEffetti() as $effetto){
                echo" {$effetto} ";
            };
            echo "</div>";
        }else{
            echo "<div class='info_sala'>{$sala->getNome()} {$sala->getNposti()}</div>";
        }
    } ?></p>


    <h2>CAPIENZA CINEMA</h2>

    <p><?php 
        $capienzaCinama = 0;
        foreach($cinemaMultiSala as $sala){
        $capienzaCinama = $capienzaCinama + $sala->getNposti();
        }; 
        echo "<div class='capienza'>{$capienzaCinama} posti </div>";
    ?></p>


    <h2>numero spettacoli del sabato per il film "la banda dei babbi natale"</h2>

    <p><?php
        $numero_spettacoli = 0;
        foreach($arraySpettacoli as $spettacolo){
            if($spettacolo->getGiorno()=="sabato" && $spettacolo->film = "la banda dei babbi natale"){
                $numero_spettacoli = $numero_spettacoli+1;
            }
        }; 
        echo "<div class='spettacoli'>{$numero_spettacoli} spettacoli </div>";
    ?></p>

    <h2>ultimo spettacolo di sabto del film "la banda dei babbi natale"</h2>

    <p><?php
        foreach($arraySpettacoli as $spettacolo){
            if($spettacolo->getGiorno()=="sabato" && 
               $spettacolo->getOraDiInizio() ==  max($array_orari) ){
                echo "<div class='ultimo_spettacolo'>{$spettacolo->getOraDiInizio()}</div>";
            }
        }
?></p>
</body>


</html>