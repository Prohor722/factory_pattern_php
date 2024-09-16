<?php

require_once "Employee.php";

class Engineer implements Employee{

    public function salary(){
        return 25000;
    }

    public function name(){
        return "I am an Engineer";
    }
}
