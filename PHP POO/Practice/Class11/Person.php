<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Person
 *
 * @author DELL
 */
abstract class Person {
    protected $name;
    protected $age;
    protected $gender;

    public final function makeBirthday() {
        $this->age++;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
}
