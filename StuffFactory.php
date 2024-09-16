<?php

require_once 'EmployeeAbstructFactory.php';
require_once 'Stuff.php';

class StuffFactory extends EmployeeAbstructFactory{

    public function createEmployee():Employee {
        return new Stuff();
    }
}