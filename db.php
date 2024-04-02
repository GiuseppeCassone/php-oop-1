<?php 

require './Models/Movies.php';
require './Models/Director.php';

$movie1Director = new Director("Christopher", "Nolan", "Britannico");
$movie1 = new Movies("Interstellar", 2014, "Il film narra di un gruppo di astronauti che viaggiano attraverso un wormhole in cerca di una nuova casa per l'umanità.", "Inglese", ['Fantascienza', 'Avventura']);
$movie1->director = $movie1Director;

$movie2Director = new Director("Hayao", "Miyazaki", "Giapponese");
$movie2 = new Movies("Il Castello Errante di Howl", 2004, "Il film presenta molte delle caratteristiche tipiche delle opere di Miyazaki: ha come protagonista una ragazza forte e carismatica, c'è un conflitto militare combattuto attraverso mezzi volanti, esiste la magia, e l'ambientazione ricorda l'Europa degli inizi del Novecento.", "Giapponese", ['Animazione', 'Fantastico', 'Sentimentale', 'Avventura']);
$movie2->director = $movie2Director;

$movie3Director = new Director("Shin'ichirô", "Ushijima", "Giapponese");
$movie3 = new Movies("Voglio Mangiare il tuo Pancreas", 2018, "Haruki Shiga è un timido studente delle superiori e il suo carattere è opposto a quello di Sakura Yamauchi, una sua compagna di classe, apparentemente sempre allegra e piena di vita. Un giorno, però, il ragazzo ritrova casualmente in un ospedale il diario segreto di Sakura che lei aveva perduto, e leggendolo scopre una terribile verità: la ragazza ha una malattia terminale al pancreas che la porterà alla morte in breve tempo. Il ragazzo diviene così custode del segreto di Sakura e decide di passare sempre più tempo con lei, per i giorni che ancora le rimangono da vivere.", "Giapponese", ['Animazione', 'Sentimentale']);
$movie3->director = $movie3Director;

$movie4Director = new Director("Guy", "Ritchie", "Britannico");
$movie4 = new Movies("The Snatch", 2000, "Dopo essere stati ingaggiati per rubare un diamante, un gruppo di ladri si scontra con rivali e complicazioni nel mondo criminale.", "Inglese", ['Noir', 'Commedia', 'Gangster']);
$movie4->director = $movie4Director;

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4
];

?>