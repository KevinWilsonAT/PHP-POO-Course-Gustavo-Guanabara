<?php
    require_once './Person.php';

class Student extends Person{
    private $reg;
    private $course;
    
    public function cancelReg(){
        echo "<p>Register will be cancelled</p>";
    }
    
    public function getReg() {
        return $this->reg;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setReg($reg): void {
        $this->reg = $reg;
    }

    public function setCourse($course): void {
        $this->course = $course;
    }


}
