<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

require_once './Student.php';

/**
 * Description of ScholarshipHolder
 *
 * @author DELL
 */
class ScholarshipHolder extends Student {
    private $scholarship;
    
    public function renewScholarship() {
        echo "<p>Renewing ". $this->getName() ."'s scholarship.</p>";
    }
    
    public function payMonthly() {
        echo "<p>". $this->getName()." is a scholarship holder. The student's payment was facilitated.";
    }
    
    public function getScholarship() {
        return $this->scholarship;
    }

    public function setScholarship($scholarship) {
        $this->scholarship = $scholarship;
    }
}
