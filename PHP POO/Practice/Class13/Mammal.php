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

class Mammal extends Animal{
    protected $furColor;
    
    function makeSound(){
        echo "<p>Mammal Sound</p>";
    }
}