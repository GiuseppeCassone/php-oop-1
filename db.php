<?php 

require './Models/Movies.php';
require './Models/Director.php';

$movie1Director = new Director("Christopher", "Nolan", "Britannico");
$movie1 = new Movies("Interstellar", 2014, "Un gruppo di astronauti intraprende un viaggio attraverso il buco nero per salvare l'umanità dalla fame, esplorando dimensioni e legami familiari oltre il tempo.", "Inglese", "https://mir-s3-cdn-cf.behance.net/project_modules/hd/8d8f28105415493.619ded067937d.jpg", ['Fantascienza', 'Avventura']);
$movie1->director = $movie1Director;

$movie2Director = new Director("Hayao", "Miyazaki", "Giapponese");
$movie2 = new Movies("Il Castello Errante di Howl", 2004, "Una giovane donna, Sophie, viene maledetta da una strega e si rifugia nel castello ambulante di Howl, vivendo avventure magiche e scoprendo segreti sulle proprie capacità.", "Giapponese", "https://pad.mymovies.it/filmclub/2004/08/005/locandina.jpg", ['Animazione', 'Fantastico', 'Sentimentale', 'Avventura']);
$movie2->director = $movie2Director;

$movie3Director = new Director("Shin'ichirô", "Ushijima", "Giapponese");
$movie3 = new Movies("Voglio Mangiare il tuo Pancreas", 2018, "
Un ragazzo scopre il diario di una compagna di classe, Sakura, affetta da una malattia terminale, e intraprende un viaggio emotivo che cambierà entrambe le loro vite.", "Giapponese", "https://www.animeclick.it/immagini/anime/Kimi_no_Suizou_o_Tabetai/cover/Kimi_no_Suizou_o_Tabetai-cover.jpg", ['Animazione', 'Sentimentale']);
$movie3->director = $movie3Director;

$movie4Director = new Director("Guy", "Ritchie", "Britannico");
$movie4 = new Movies("The Snatch", 2000, "Dopo essere stati ingaggiati per rubare un diamante, un gruppo di ladri si scontra con rivali e complicazioni nel mondo criminale.", "Inglese", "https://i.ebayimg.com/images/g/5XgAAOSwKfVXLNNG/s-l1600.jpg", ['Noir', 'Commedia', 'Gangster']);
$movie4->director = $movie4Director;

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4
];

?>