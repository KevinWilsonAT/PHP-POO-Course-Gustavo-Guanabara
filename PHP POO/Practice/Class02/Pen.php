<?php

class Pen {
    var $model;
    var $color;
    var $tip;
    var $charge;
    var $covered;
    
    function draw(){
        if($this->covered == true){
            echo '<p> ERROR: Cannot Draw With Covered Pen </p>';
        }
        else {
            echo '<p> Drawing.. </p>';
        }
    }
    
    function cover(){
        $this->covered = true;
    }
    
    function uncover(){
        $this->covered = false;
    }
}
