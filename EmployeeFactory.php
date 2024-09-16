<?php
require 'EmployeeAbstructFactory.php';

class EmployeeFactory{
    public static function getEmployee(EmployeeAbstructFactory $factory){
        return $factory->createEmployee();
    }
}