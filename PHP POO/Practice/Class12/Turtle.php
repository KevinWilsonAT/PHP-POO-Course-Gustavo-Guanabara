<?php

require_once './Reptile.php';

class Turtle extends Reptile {
     
    public function move() {
        echo "<p> The Turtle is Moving </p>";
    }

    public function feed() {
        echo "<p> The Turtle is Eating Vegetables </p>";
    }

    public function makeSound() {
        echo "<p> The Turtle is Making a Sound </p>";
    }
    
    public function hide() {
        echo "<p> The Turtle is Hiding Inside its Shell </p>";
    }
}
