<?php
    require_once './Fighter.php';

class Fight {
    private $challenged;
    private $challenger;
    private $rounds;
    private $approved;
    private $msg;


    public function setFight($f1, $f2) {
        if($f1->getCategory() === $f2->getCategory() && ($f1 != $f2)){
            $this->approved = true;
            $this->challenged = $f1;
            $this->challenger = $f2;
        }
        else {
            $this->approved = false;
            $this->challenged = null;
            $this->challenger = null;
        }
    }
    
    public function fight() {
        if($this->approved){
            $this->challenged->display();
            $this->challenger->display();
            $winner = rand(0,2);
            
            switch ($winner) {
                case 0:
                    echo "<p>It's a Draw.</p>";
                    $this->challenged->drawFight();
                    $this->challenger->drawFight();
                    break;

                case 1:
                    echo "<p>End of the fight. The Challenged Fighter ". $this->challenged->getName()." wins.</p>";
                    $this->challenged->winFight();
                    $this->challenger->loseFight();
                    break;
                
                case 2:
                    echo "<p>End of the fight. The Challenger Fighter ". $this->challenger->getName()." wins.</p>";
                    $this->challenger->winFight();
                    $this->challenged->loseFight();
                    break;
            }
        }
        else {
            echo "<p>ERROR. Cannot proceed this fight<br>(The fighters does not are from the same level categories or ";
            echo "both fighters are registered as the same person).</p>";
        }
    }
    
    // Special Methods
    
    public function getChallenged() {
        return $this->challenged;
    }

    public function getChallenger() {
        return $this->challenger;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getApproved() {
        return $this->approved;
    }

    public function setChallenged($challenged){
        $this->challenged = $challenged;
    }

    public function setChallenger($challenger){
        $this->challenger = $challenger;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function setApproved($approved) {
        $this->approved = $approved;
    }
}
