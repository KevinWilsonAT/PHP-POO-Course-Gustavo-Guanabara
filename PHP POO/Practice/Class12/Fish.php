<?php

require_once './Animal.php';

class Fish extends Animal {
     private $scaleColor;

     public function getscaleColor() {
         return $this->scaleColor;
     }

     public function setScaleColor($scaleColor): void {
         $this->scaleColor = "Scale Color: " . $scaleColor;
     }

    public function move() {
        echo "<p> The Fish is Swiming </p>";
    }


    public function feed() {
        echo "<p> The Fish is Feeding </p>";
    }


    public function makeSound() {
        echo "<p> The Fish doesn't Make a Sound </p>";
    }
    
    public function makeBubbles() {
        echo "<p> The Fish is Making Bubbles </p>";
    }
}
