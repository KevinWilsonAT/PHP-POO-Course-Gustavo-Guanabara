<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Dog
 *
 * @author DELL
 */

require_once './Wolf.php';

class Dog extends Wolf{
    function makeSound(){
        echo "<p>The dog is barking</p>";
    }
    
    function reactPhrase($phrase) {
        if ($phrase == "Here's your food" || $phrase == "Who is the good boy?") {
            echo "<p>The dog is wagging its tail and barking</p>";
        }
        else{
            echo "<p>The dog is growling</p>";
        }
    }
    
    function reactTime($hour) {
        if ($hour < 12) {
            echo "<p>The dog is wagging its tail</p>";
        }
        else if ($hour >= 18) {
            echo "<p>The dog is ignoring</p>";
        }
        else{
            echo "<p>The dog is wagging its tail and barking</p>";
        }
    }
    
    function reactOwner($owner) {
        if ($owner == true) {
            echo "<p>The dog is wagging its tail</p>";
        }
        else {
            echo "<p>The dog is growling and barking</p>";
        }
    }
    
    function reactAgeWeight($age, $weight) {
        if ($age < 5) {
            if ($weight < 10) {
                echo "<p>The dog is wagging its tail</p>";
            }
            else {
                echo "<p>The dog is barking</p>";
            }
        }
        else{
            if ($weight < 10) {
                echo "<p>The dog is growling</p>";
            }
            else{
                echo "<p>The dog is ignoring</p>";
            }
        }
    }
}
