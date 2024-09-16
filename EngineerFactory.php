<?php

require_once 'EmployeeAbstructFactory.php';
require_once 'Engineer.php';

class EngineerFactory extends EmployeeAbstructFactory{
    public function createEmployee():Engineer {
        return new Engineer();
    }
}