<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Animal
 *
 * @author DELL
 */

abstract class Animal {
    protected $weight;
    protected $age;
    protected $members;

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function getMembers() {
        return $this->members;
    }

    public function setWeight($weight): void {
        $this->weight = $weight;
    }

    public function setAge($age): void {
        $this->age = $age;
    }

    public function setMembers($members): void {
        $this->members = $members;
    }
    
    abstract function move();
    abstract function feed();
    abstract function makeSound();
    
    public function toString() {
        return "<p> Weight: " . $this->getWeight() . "<br>Age: " . $this->getAge() . "<br>Members: " . $this->getMembers() . "</p>";
    }
}
