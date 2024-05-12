<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

require_once './Person.php';

/**
 * Description of Teacher
 *
 * @author DELL
 */
class Teacher extends Person {
    private $specialty;
    private $salary;
    
    public function receiveAug($aug) {
        $this->salary += $aug;
        echo "<p>" . $this->getName() . " is a Teacher.</p>";
        echo "<p>His/Her salary will be augmented to ". $this->getSalary() ."</p>";
    }
    
    public function getSpecialty() {
        return $this->specialty;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSpecialty($specialty) {
        $this->specialty = $specialty;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
