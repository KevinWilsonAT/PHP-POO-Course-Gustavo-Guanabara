<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kangaroo
 *
 * @author DELL
 */

require_once './Bird.php';

class Parrot extends Bird{
    
    public function move() {
        echo "<p> The Parrot is Flying </p>";
    }
    
    public function feed() {
        echo "<p> The Parrot is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Parrot is Making a Sound </p>";
    }
    
    public function makeNest() {
        echo "<p> The Parrot is Making a Nest</p>";
    }
}
