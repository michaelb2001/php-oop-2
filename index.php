<?php


/*
2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
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

$spettacolo1 = new Spettacolo($film1->getNome(),1.30,20.35,$cinemaMultiSala[0]->getNome());
$spettacolo2 = new Spettacolo($film1->getNome(),1.30,20.35,$cinemaMultiSala[3]->getNome());


$capienzaCinama; 

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
        foreach($cinemaMultiSala as $sala){
        $capienzaCinama = $capienzaCinama + $sala->getNposti();
        }; 
        echo "<div class='capienza'>{$capienzaCinama} posti </div>";
    ?></p>

</body>


</html>