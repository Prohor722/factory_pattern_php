<?php
require 'Engineer.php';
require 'Stuff.php';

class EmployeeFactory{
    public static function addEmployee($type, $name, $age, $salary, $post){
        if($type == 'engineer'){
            return new Engineer($name, $age, $salary, $post);
        }
        elseif($type == 'stuff'){
            return new Stuff($name, $age, $salary, $post);
        }
    }
}

$emp1 = EmployeeFactory::addEmployee('engineer','Belal', 25, 26000, 1);
$stuff1 = EmployeeFactory::addEmployee('stuff','Kurbot', 22, 12000, 'Care-Taker');

echo $emp1->getEngeerDetails();
echo "\r\n\r\n";
echo $stuff1->getStuffDetails();