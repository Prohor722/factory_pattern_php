<?php
require 'Engineer.php';
require 'Stuff.php';

class EmployeeFactory{
    public static function addEmployee($type, $name='', $age=0, $salary=0, $post=''){
        if($type==null){
            return "Need Employee Data!";
        }
        elseif($type == 'engineer'){
            return new Engineer($name, $age, $salary, $post);
        }
        elseif($type == 'stuff'){
            return new Stuff($name, $age, $salary, $post);
        }
        else{
            return "Please check type!!";
        }
    }
}