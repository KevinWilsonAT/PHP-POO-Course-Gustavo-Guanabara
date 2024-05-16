<?php

require_once './Animal.php';

class Goldfish extends Animal {
     private $scaleColor;

     public function getscaleColor() {
         return $this->scaleColor;
     }

     public function setScaleColor($scaleColor): void {
         $this->scaleColor = "Scale Color: " . $scaleColor;
     }

    public function move() {
        echo "<p> The Goldfish is Swiming </p>";
    }


    public function feed() {
        echo "<p> The Goldfish is Feeding </p>";
    }


    public function makeSound() {
        echo "<p> The Goldfish doesn't Make a Sound </p>";
    }
    
    public function makeBubbles() {
        echo "<p> The Goldfish is Making Bubbles </p>";
    }
}
