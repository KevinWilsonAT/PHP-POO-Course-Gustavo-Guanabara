<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

require_once './Student.php';

/**
 * Description of Technician
 *
 * @author DELL
 */
class Technician extends Student {
    private $profRegister;

    public function practice(){
        echo "<p>" . $this->getName() . " is a technician and he/she is practicing.";
    }
    
    public function getProfRegister() {
        return $this->profRegister;
    }

    public function setProfRegister($profRegister): void {
        $this->profRegister = $profRegister;
    }
}
