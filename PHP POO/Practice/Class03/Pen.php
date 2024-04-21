<?php

class Pen {
    public $model;
    public $color;
    private $tip;
    protected $charge;
    protected $covered;
    
    public function draw(){
        if($this->covered == true){
            echo '<p> ERROR: Cannot Draw With Covered Pen </p>';
        }
        else {
            echo '<p> Drawing... </p>';
        }
    }
    
    private function cover(){
        $this->covered = true;
    }
    
    private function uncover(){
        $this->covered = false;
    }
}
