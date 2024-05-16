<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author DELL
 */

require_once './Mammal.php';

class Dog extends Mammal{
    
    public function move() {
        echo "<p> The Dog is Running </p>";
    }

    public function feed() {
        echo "<p> The Dog is Feeding </p>";
    }

    public function makeSound() {
        echo "<p> The Dog is Barking </p>";
    }
    
    public function buryBone() {
        echo "<p> The Dog is Burying a Bone </p>";
    }
    
    public function wagTail() {
        echo "<p> The Dog is Wagging its Tail </p>";
    }
}