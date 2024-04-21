<?php

interface Controller {
    public function turnOn();
    public function turnOff();
    public function openMenu();
    public function closeMenu();
    public function moreVolume();
    public function lessVolume();
    public function muteOn();
    public function muteOff();
    public function play();
    public function pause();
}