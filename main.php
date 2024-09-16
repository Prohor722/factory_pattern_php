<?php 
    require 'EmployeeFactory.php';
    require 'EngineerFactory.php';
    require 'StuffFactory.php';

    $emp1 = EmployeeFactory::getEmployee(new EngineerFactory());
    $stuff1 = EmployeeFactory::getEmployee(new StuffFactory());
    
    echo $emp1->name();
    echo "\r\n\r\n";
    echo $stuff1->name();
?>