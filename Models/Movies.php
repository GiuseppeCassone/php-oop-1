<?php 

class Movies {

    public $title;
    public $releaseDate;
    public $overview;
    public $originalLanguage;


    // funzione costruttore
    function __construct($_title, $_releaseDate, $_overview, $_originalLanguage) {

        // attributi della classe Movies
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->overview = $_overview;
        $this->originalLanguage = $_originalLanguage;
    }

    public function getLanguage() {
        return $this->originalLanguage;
    }

    
    
}







?>