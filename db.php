<?php 

require './Models/Movies.php';
require './Models/Director.php';

$movie1Director = new Director("Christopher", "Nolan", "Britannico");

$movie1 = new Movies("Interstellar", 2014, "Il film narra di un gruppo di astronauti che viaggiano attraverso un wormhole in cerca di una nuova casa per l'umanità.", "Inglese");
$movie1->director = $movie1Director;

$movie2Director = new Director("Hayao", "Miyazaki", "Giapponese");

$movie2 = new Movies("Il Castello Errante di Howl", 2004, "Il film presenta molte delle caratteristiche tipiche delle opere di Miyazaki: ha come protagonista una ragazza forte e carismatica, c'è un conflitto militare combattuto attraverso mezzi volanti, esiste la magia, e l'ambientazione ricorda l'Europa degli inizi del Novecento.", "Giapponese");
$movie2->director = $movie2Director;

$movies = [
    $movie1,
    $movie2
];

?>