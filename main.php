<?php 
    require 'EmployeeFactory.php';

    $emp1 = EmployeeFactory::addEmployee('engineer','Belal', 25, 26000, 1);
    $stuff1 = EmployeeFactory::addEmployee('stuff','Kurbot', 22, 12000, 'Care-Taker');
    
    echo $emp1->getEngeerDetails();
    echo "\r\n\r\n";
    echo $stuff1->getStuffDetails();
?>