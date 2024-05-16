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

require_once './Mammal.php';

class Kangaroo extends Mammal{
    
    public function move() {
        echo "<p> The Kangaroo is Jumping </p>";
    }

    public function feed() {
        echo "<p> The Kangaroo is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Kangaroo is Making a Sound </p>";
    }
    
    public function usePouch() {
        echo "<p> The Kangaroo is Using its Pouch </p>";
    }
}
