<?php
require 'vehicle.php';
require 'car.php';

$veh1 = new Vehicle();  
$car1 = new Car('tesla', 2010);
$veh1->ShowInfo();
echo '<br>';
$car1->ShowInfo();

$veh_singleton1 = Vehicle::CreateInstance();
$veh_singleton2 = Vehicle::CreateInstance('123', '123');

echo '<br><br>';
$veh_singleton1->ShowInfo();
echo '<br>';
$veh_singleton2->ShowInfo();

if($veh_singleton1 == $veh_singleton2){
    echo '<br>These are the same instances.';
}
else {
    echo '<br>These are different instances.';
}
