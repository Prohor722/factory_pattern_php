<?php

require "Employee.php";

class Engineer extends Employee{
    private $level = 0;

    public function __construct($name, $age, $salary, $level){
        parent::__construct($name, $age, $salary);
        $this->level = $level;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getEngeerDetails(){
        return "Enginner Name: ".$this->getName()."\r\n".
        "Salary: ".$this->getSalary()."\r\n".
        "Age: ".$this->getAge()."\r\n".
        "Level: ".$this->getLevel()."\r\n";
    }
}
