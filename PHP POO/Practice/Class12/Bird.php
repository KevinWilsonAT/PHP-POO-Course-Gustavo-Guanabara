<?php

require_once './Animal.php';

class Bird extends Animal {
    private $featherColor;

    public function getFeatherColor() {
        return $this->featherColor;
    }

    public function setFeatherColor($featherColor): void {
        $this->featherColor = "Feather Color: " . $featherColor;
    }
     
    public function move() {
        echo "<p> The Bird is Flying </p>";
    }
    
    public function feed() {
        echo "<p> The Bird is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Bird is Making a Sound </p>";
    }
    
    public function makeNest() {
        echo "<p> The Bird is Making a Nest</p>";
    }
}
