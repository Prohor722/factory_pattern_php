<?php 

require_once 'Employee.php';

class Stuff extends Employee{
    private $work;

    public function __construct($name, $age, $salary, $work){
        parent::__construct($name, $age, $salary);
        $this->work = $work;
    }

    public function workType(){
        return $this->work;
    }

    public function getStuffDetails(){
        return "Stuff Name: ".$this->getName()."\r\n".
        "Salary: ".$this->getSalary()."\r\n".
        "Age: ".$this->getAge()."\r\n".
        "Work Type: ".$this->workType()."\r\n";
    }

}
