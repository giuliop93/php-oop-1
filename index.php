<?php

class Movie {

    public $title;

    function __construct($title, $duration) {

        $this->title = $title;
        $this->duration = $duration;
    }

    public function setAudience($eta) {
        if ($eta < 18) {
            $this->audience = false;
        }
    }

    public function getAudience() {
        return $this->audience;
    }
    
}

$movie->title = "Francesco e la borraccia magica";

$memento = new Movie(120);

$movie->setAudience();

$movie_audience = $movie->getAudience()

?>