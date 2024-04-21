<?php

class BankAccount {
    public $accountNum;
    protected $type;
    private $owner;
    private $balance;
    private $status;
    
    public function __construct(){
        $this->setBalance(0);
        $this->setStatus(false);
        echo "<p>Bank Account Created Successfully</p>";
    }
    
    public function getAccountNum() {
        return $this->accountNum;
    }

    public function getType() {
        return $this->type;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setAccountNum($accountNum): void {
        $this->accountNum = $accountNum;
    }

    public function setType($type): void {
        $this->type = $type;
    }

    public function setOwner($owner): void {
        $this->owner = $owner;
    }

    public function setBalance($balance): void {
        $this->balance = $balance;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function openAccount($t){
        $this->setType($t);
        $this->setStatus(true);

        if($t == "CA"){
            $this->setBalance(50);
        }
        else if ($t == "SA"){
            $this->setBalance(150);
        }
    }
    
    public function closeAccount(){
        if($this->getBalance() > 0){
            echo "<p>This account is not empty to be closed.</p>";
        }
        else if($this->getBalance() < 0){
            echo "<p>This account cannot be closed in debt.</p>";
        }
        else{
            $this->setStatus(false);
            echo "<p>Account of ".$this->getOwner()." closed successfully!</p>";
        }
    }
    
    public function deposit($v){
        if ($this->getStatus()){
            $this->setBalance($this->getBalance() + $v);
            echo "<p>Deposited successfully $".$v." in the account of ".$this->getOwner()."</p>";
        }
        else{
            echo "<p>Cannot deposit. Inexistent or Closed Account</p>";
        }
    }
    
    public function withdraw($v){
        
        if($this->getStatus()){
            if($this->getBalance() >= $v){
                $this->setBalance($this->getBalance() - $v);
                echo "<p>Withdrawed $".$v." successfully from the account of ".$this->getOwner()."</p>";
            }
            else{
                echo "<p>Insufficient Money to perform a withdrawal</p>";
            }
        }
        else{
            echo "<p>Cannot withdraw. Inexistent or Closed Account</p>";
        }
    }
    
    public function payMonth(){
        if($this->getType() == 'CA'){
            $v = 12;
        }
        else if($this->getType() == 'SA'){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setBalance($this->getBalance() - $v);
            echo "<p>Monthly pay of $".$v." withdrawed successfully from the account of ".$this->getOwner()."</p>";
        }
        else {
            echo "<p>Account problems. Cannot pay</p>";
        }
    }
}