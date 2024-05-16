<?php

require_once './Animal.php';

class Reptile extends Animal {
    private $scaleColor;

    public function getscaleColor() {
        return $this->scaleColor;
    }

    public function setScaleColor($scaleColor): void {
        $this->scaleColor = "Scale Color: " . $scaleColor;
    }
     
    public function move() {
        echo "<p> The Reptile is Moving </p>";
    }

    public function feed() {
        echo "<p> The Reptile is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Reptile is Making a Sound </p>";
    }
}
