<?php 

require_once 'Employee.php';

class Stuff extends Employee{
    private $work_type = "";
    private $shift = "";

    public function setWorkType($work_type){
        $this->work_type = $work_type;
    }
    public function getWorkType(){
        return $this->work_type;
    }
    public function stuffDetails(){
        return "Stuff".$this->getDetails().
            "Work Type: ".$this->getWorkType();
    }
}
