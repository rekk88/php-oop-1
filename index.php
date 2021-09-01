<?php

class Movie{
    public $genre; //genere film
    public $date; //data di uscita

    public function __construct($_genre , $_date){
        $this->genre = $_genre;
        $this->date = $_date;
    }

}

$film = new Movie("asd" , "20/02/2001");

var_dump($film);


?>