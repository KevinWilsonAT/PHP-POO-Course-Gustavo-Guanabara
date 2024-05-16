<?php

require_once './Reptile.php';

class Snake extends Reptile {
     
    public function move() {
        echo "<p> The Snake is Crawling </p>";
    }

    public function feed() {
        echo "<p> The Snake is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Snake is Hissing </p>";
    }
}
