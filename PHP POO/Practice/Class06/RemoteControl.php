<?php

require_once './Controller.php';

class RemoteControl implements Controller {
    
    private $volume;
    private $turnOn;
    private $playing;
    private $prevVolume;

    public function __construct() {
        $this->volume = 50;
        $this->turnOn = false;
        $this->playing = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getTurnOn() {
        return $this->turnOn;
    }

    private function getPlaying() {
        return $this->playing;
    }

    private function getPrevVolume() {
        return $this->prevVolume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function setTurnOn($turnOn){
        $this->turnOn = $turnOn;
    }

    private function setPlaying($playing){
        $this->playing = $playing;
    }

    private function setPrevVolume($prevVolume){
        $this->prevVolume = $prevVolume;
    }

    public function moreVolume() {
        if ($this->getTurnOn()) {
            if ($this->getVolume() < 100){
                $this->setVolume($this->getVolume() + 5);
            }
            else {
                echo "ERROR: Max Volume Level Reached";
            }
        }
        else {
            echo "ERROR: Cannot operate volume conditions, Turn the controller first";
        }
    }

    public function lessVolume() {
        if ($this->getTurnOn()) {
            if ($this->getVolume() > 0){
                $this->setVolume($this->getVolume() - 5);
            }
            else {
                echo "ERROR: Min Volume Level Reached";
            }
        }
        else {
            echo "ERROR: Cannot operate volume conditions, Turn the controller first";
        }
    }

    public function muteOn() {
        if ($this->getTurnOn() && $this->getVolume() > 0) {
            $this->setPrevVolume($this->getVolume());
            $this->setVolume(0);
        }
        else {
            echo "ERROR: Cannot operate volume conditions, Turn the controller first";
        }
    }

    public function muteOff() {
        if ($this->getTurnOn() && $this->getVolume() == 0) {
            $this->setVolume($this->getPrevVolume());
        }
        else {
            echo "ERROR: Cannot operate volume conditions, Turn the controller first";
        }
    }

    public function openMenu() {
        if ($this->getTurnOn()){
            echo "<p>----- MENU OPENED -----</p>";
            echo "Is it turned on? ".$this->getTurnOn()."<br>";
            echo "Is it playing? ".$this->getPlaying()."<br>";
            echo "Volume: ". $this->getVolume()."<br>";

            for($i = 0; $i <= $this->getVolume(); $i += 10){
                echo "#";
            }
            echo "<br>";
        }
        else {
            echo "ERROR: Cannot Open Menu, Turn the controller first";
        }
    }

    public function closeMenu() {
        if ($this->getTurnOn()){
            echo "Closing Menu...";
        }
        else {
            echo "ERROR: Cannot Close Menu, Turn the controller first";
        }
    }

    public function play() {
        if ($this->getTurnOn() && !($this->getPlaying())) {
            $this->setPlaying(true);
        }
        else {
            echo "ERROR: Cannot play, Turn the controller first";
        }
    }

    public function pause() {
        if ($this->getTurnOn() && $this->getPlaying()) {
            $this->setPlaying(false);
        }
        else {
            echo "ERROR: Cannot pause, Turn the controller first";
        }
    }

    public function turnOff() {
        $this->setTurnOn(false);
    }

    public function turnOn() {
        $this->setTurnOn(true);
    }

}
