<?php 

class Movies {

    public $title;
    public $releaseDate;
    public $overview;
    public $originalLanguage;
    public $genre;
    public $director;


    // funzione costruttore    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_releaseDate
     * @param  string $_overview
     * @param  string $_originalLanguage
     */
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