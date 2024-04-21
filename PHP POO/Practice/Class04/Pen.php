<?php

class Pen {
    private $model;
    private $color;
    private $tip;
    private $covered;


 // public function Pen($m, $c, $t){ ... } is also be used as a constructor method

    public function __construct($m, $c, $t) { 
        $this->model = $m;
        $this->color = $c;
        $this->tip = $t;
        $this->cover();
    }

    public function cover(){
        $this->covered = true;
    }
    
    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getTip() {
        return $this->tip;
    }

    public function setTip($tip){
        $this->tip = $tip;
    }
}
