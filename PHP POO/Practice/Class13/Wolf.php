<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Wolf
 *
 * @author DELL
 */

require_once './Mammal.php';

class Wolf extends Mammal{

    function makeSound(){
        echo"<p>The wolf is howling</p>";
    }
}
