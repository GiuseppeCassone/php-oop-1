<?php 

class Movies {

    public $title;
    public $releaseDate;
    public $overview;
    public $originalLanguage;
    public $genre = [];
    public $director;


    // funzione costruttore    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_releaseDate
     * @param  string $_overview
     * @param  string $_originalLanguage
     * @param  string $_genre
     */
    function __construct($_title, $_releaseDate, $_overview, $_originalLanguage, $_genre) {

        // attributi della classe Movies
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->overview = $_overview;
        $this->originalLanguage = $_originalLanguage;
        $this->genre = $_genre;
    }

    public function getLanguage() {
        return $this->originalLanguage;
    }

    public function getGenres() {
        return implode(', ', $this->genre);
    }

    
    
}


?>