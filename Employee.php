<?php

abstract class Employee{
    private $name;
    private $salary;
    private $age;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getDetails(){
        return "Name: ".$this->getName()."\r\n".
        "Salary: ".$this->getSalary()."\r\n".
        "Age: ".$this->getAge()."\r\n";
    }
}

