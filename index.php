<?php

class Movie{
    public $genre; //genere film
    public $date; //data di uscita
    public $time;

    // constructor
    public function __construct($_genre , $_date){
        $this->genre = $_genre;
        $this->date = $_date;
    }

    // getter & setter
    public function setTime($time){
        $this->time= $time;
    }
    public function getTime(){
        return $this->time;
    }
}

$film = new Movie("asd" , "20/02/2001");
$film2 = new Movie("ciao" , "22/02/2012");

var_dump($film);
var_dump($film2);

$film2->setTime(120);

var_dump($film2);
echo $film2->genre , " ",$film2->date ," " ,$film2->time ; //test output con echo 
?>