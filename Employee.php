<?php

class Employee{
    private $name;
    private $age;
    private $salary;
    
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setSalary($salary){
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
        return "Name: ".$this->name."\r\n".
        "Age: ".$this->age."\r\n".
        "Salary: ".$this->salary."\r\n";
    }
}