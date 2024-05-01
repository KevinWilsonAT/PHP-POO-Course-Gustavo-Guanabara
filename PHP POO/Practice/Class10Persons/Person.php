<?php

class Person {
    private $name;
    private $age;
    private $gender;
    
    public function makeBirthday() {
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

    public function setName($name): void {
        $this->name = $name;
    }

    public function setAge($age): void {
        $this->age = $age;
    }

    public function setGender($gender): void {
        $this->gender = $gender;
    }

}
