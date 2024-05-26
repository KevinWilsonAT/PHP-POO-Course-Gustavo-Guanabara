<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Visualization
 *
 * @author DELL
 */

require_once './Video.php';
require_once './Pupil.php';

class Visualization {
    private $spectator;
    private $movie;

    public function __construct($spectator, $movie) {
        $this->spectator = $spectator;
        $this->movie = $movie;
        $this->spectator->setTotWatched($this->spectator->getTotWatched() + 1);
        $this->movie->setViews($this->movie->getViews() + 1);
    }
    
    
    public function review() {
        $this->movie->setReview(5);
    }
    
    public function reviewRank($rank) {
        $this->movie->setReview($rank);
    }
    
    public function reviewPorc($porc) {
        $tot = 0;
        if($porc <= 20){
            $tot = 3;
        }
        else if($porc <= 50){
            $tot = 5;
        }
        else if($porc <= 90){
            $tot = 8;
        }
        else{
            $tot = 10;
        }
        
        $this->movie->setReview($tot);
    }

}
