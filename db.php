<?php 

require './Models/Movies.php';




$movie1 = new Movies("Interstellar", 2014, "Il film narra di un gruppo di astronauti che viaggiano attraverso un wormhole in cerca di una nuova casa per l'umanità.", "Inglese");




$movie2 = new Movies("Il Castello Errante di Howl", 2004, "Il film presenta molte delle caratteristiche tipiche delle opere di Miyazaki: ha come protagonista una ragazza forte e carismatica, c'è un conflitto militare combattuto attraverso mezzi volanti, esiste la magia, e l'ambientazione ricorda l'Europa degli inizi del Novecento.", "Giapponese");


$movies = [
    $movie1,
    $movie2
];

?>