<?php

class Fighter {
    
    private $name;
    private $nationality;
    private $age, $height, $weight;
    private $category, $wins, $losses, $draws;
    
    public function display(){
        echo "Fighter: ". $this->getName()."<br>";
        echo "Origins: ". $this->getNationality()."<br>";
        echo "Age: ". $this->getAge()."<br>";
        echo "Height: ". $this->getHeight()."<br>";
        echo "Weight: ". $this->getWeight()."<br>";
        echo "Wins: ". $this->getWins()."<br>";
        echo "Losses: ". $this->getLosses()."<br>";
        echo "Draws: ". $this->getDraws()."<br><br>";
    }
    
    public function status(){
        echo "Fighter: ". $this->getName()."<br>";
        echo "Category: ". $this->getCategory()."<br>";
        echo "Wins: ". $this->getWins()."<br>";
        echo "Losses: ". $this->getLosses()."<br>";
        echo "Draws: ". $this->getDraws()."<br><br>";
    }
    
    public function winFight(){
        $this->setWins($this->getWins() + 1);
    }
    
    public function loseFight(){
        $this->setLosses($this->getLosses() + 1);
    }
    
    public function drawFight(){
        $this->setDraws($this->getDraws() + 1);
    }
    
    // Special Methods

    public function __construct($n, $nat, $age, $h, $w, $wins, $losses, $draws) {
        $this->name = $n;
        $this->nationality = $nat;
        $this->age = $age;
        $this->height = $h;
        $this->setWeight($w);
        $this->wins = $wins;
        $this->losses = $losses;
        $this->draws = $draws;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function getAge() {
        return $this->age;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getWins() {
        return $this->wins;
    }

    public function getLosses() {
        return $this->losses;
    }

    public function getDraws() {
        return $this->draws;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setNationality($nationality){
        $this->nationality = $nationality;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function setWeight($weight){
        $this->weight = $weight;
        $this->setCategory();
    }

    private function setCategory(){
         if($this->weight < 52.2){
             $this->category = "Invalid Category";
        }
        else if($this->weight <= 70.3){
            $this->category = "Light";
        }
        else if($this->weight <= 83.9){
            $this->category = "Mid";
        }
        else if($this->weight <= 120.2){
            $this->category = "Heavy";
        }
        else {
            $this->category = "Invalid";
        }
    }

    public function setWins($wins){
        $this->wins = $wins;
    }

    public function setLosses($losses){
        $this->losses = $losses;
    }

    public function setDraws($draws){
        $this->draws = $draws;
    }


}
