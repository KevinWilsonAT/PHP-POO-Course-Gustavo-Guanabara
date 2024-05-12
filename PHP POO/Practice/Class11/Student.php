<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

require_once './Person.php';

/**
 * Description of Student
 *
 * @author DELL
 */
class Student extends Person {
    private $register;
    private $course;
    
    public function payMonthly() {
        echo "<p>Paying student". $this->getName()."'s monthly payment";
    }
    
    public function getRegister() {
        return $this->register;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setRegister($register) {
        $this->register = $register;
    }

    public function setCourse($course) {
        $this->course = $course;
    }
}
