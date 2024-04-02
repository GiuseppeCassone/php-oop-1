<?php

class Director {

    public $name;
    public $surname;
    public $nationality;

    
    /**
     * __construct
     *
     * @param  string $name
     * @param  string $surname
     * @param  string $nationality
     */
    function __construct($name, $surname, $nationality){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->nationality = $nationality;
    }

    public function getDirector() {

        return $this->name . ' ' . $this->surname . ' ' . $this->nationality . '.';
    }
}

?>