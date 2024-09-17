<?php

require_once "Employee.php";

class Engineer extends Employee{
    private $level = 0;

    public function setLevel($level){
        $this->level = $level;
    }
    public function getLevel(){
        return $this->level;
    }
    public function engDetails(){
        return "Engineer".$this->getDetails().
            "Level: ".$this->getLevel();
    }
}
