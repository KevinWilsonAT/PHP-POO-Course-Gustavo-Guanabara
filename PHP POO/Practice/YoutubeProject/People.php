<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of People
 *
 * @author DELL
 */
abstract class People {
    protected $name;
    protected $age;
    protected $gender;
    protected $experience;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->experience = 0;
    }
    
    protected function gainExp($n) {
        $this->experience += $n;
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

    public function getExperience() {
        return $this->experience;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAge($age): void {
        $this->age = $age;
    }

    public function setGender($gender): void {
        $this->gender = $gender;
    }

    public function setExperience($experience): void {
        $this->experience = $experience;
    }
    
}
