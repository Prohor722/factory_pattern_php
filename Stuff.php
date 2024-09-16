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
        return "Stuff ".
        $this->getDetails().
        "Work Type: ".$this->workType();
    }

}
