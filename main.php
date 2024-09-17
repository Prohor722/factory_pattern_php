<?php 
    require 'EmployeeFactory.php';
    require 'EngineerFactory.php';
    require 'StuffFactory.php';

    $emp1 = EmployeeFactory::getEmployee(new EngineerFactory());
    $emp2 = EmployeeFactory::getEmployee(new StuffFactory());
    
    $emp1->setName("Robert");
    $emp1->setAge(35);
    $emp1->setSalary(120000);
    $emp1->setLevel(4);
    echo $emp1->engDetails();
    echo "\r\n\r\n";   

    $emp2->setName("Martha");
    $emp2->setAge(28);
    $emp2->setSalary(20000);
    $emp2->setWorkType("Head Chef");
    echo $emp2->stuffDetails();
?>