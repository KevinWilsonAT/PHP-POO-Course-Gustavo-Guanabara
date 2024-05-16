<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mammal
 *
 * @author DELL
 */

require_once './Animal.php';

class Mammal extends Animal {
     private $furColor;

     public function getFurColor() {
         return $this->furColor;
     }

     public function setFurColor($furColor): void {
         $this->furColor = "Fur Color: " . $furColor;
     }
     
    public function move() {
        echo "<p> The Mammal is Running</p>";
    }
    
    public function feed() {
        echo "<p> The Mammal is Feeding</p>";
    }

    public function makeSound() {
        echo "<p> The Mammal is Making a Sound</p>";
    }
}