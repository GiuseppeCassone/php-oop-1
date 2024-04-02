<?php 

require 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">

    <div class="container p-5">
        <h1 class="text-center text-white w-100">MOVIES</h1>
        <div class="row justify-content-center mt-4">
                <?php 
                foreach($movies as $movie) {
                    echo "
                    <div class='card p-0'>
                        <img src=" . $movie->posterUrl . " class='card-img-top' alt=" . $movie->title . ">
                        <div class='card-body p-4'>
                            <h4>TITOLO: " . $movie->title . "</h4> 
                            <p><strong>ANNO: </strong>" . $movie->releaseDate . "</p> 
                            <p><strong>PLOT: </strong>" . $movie->overview . "</p> 
                            <p><strong>LINGUA ORIGINALE: </strong>" . $movie->getLanguage() . "</p>
                            <p><strong>GENERI: </strong>" . $movie->getGenres() . "</p>
                            <p><strong>REGIA: </strong>" . $movie->director->getDirector() . "</p>
                        </div>
                    </div>";
                }
                ?>       
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>