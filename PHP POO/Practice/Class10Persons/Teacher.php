<?php
require_once './Person.php';

class Teacher extends Person{
    private $specialty;
    private $salary;
    
    public function receiveAug($aug) {
        $this->salary += $aug;
    }
    
    public function getSpecialty() {
        return $this->specialty;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSpecialty($specialty): void {
        $this->specialty = $specialty;
    }

    public function setSalary($salary): void {
        $this->salary = $salary;
    }

}
