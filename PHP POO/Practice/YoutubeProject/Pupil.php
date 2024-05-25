<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pupil
 *
 * @author DELL
 */
require_once './People.php';

class Pupil extends People {
    
    private $login;
    private $totWatched;

    public function __construct($name, $age, $gender, $login) {
        parent::__construct($name, $age, $gender);
        $this->login = $login;
        $this->totWatched = 0;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getTotWatched() {
        return $this->totWatched;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotWatched($totWatched) {
        $this->totWatched = $totWatched;
    }
    
}
