<?php
require_once './Person.php';

class Employee extends Person{
    private $sector;
    private $working;
    
    public function changeWork() {
        $this->working = ! $this->working;
    }
    
    public function getSector() {
        return $this->sector;
    }

    public function getWorking() {
        return $this->working;
    }

    public function setSector($sector): void {
        $this->sector = $sector;
    }

    public function setWorking($working): void {
        $this->working = $working;
    }



}
