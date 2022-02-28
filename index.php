<?php

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

$spettacolo1 = new Spettacolo($film1->getNome(),135,20.35);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    
</body>
</html>