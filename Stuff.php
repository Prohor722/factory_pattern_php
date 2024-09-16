<?php 

require_once 'Employee.php';

class Stuff implements Employee{

    public function salary(){
        return 12000;
    }

    public function name(){
        return "I am a Stuff";
    }
}
