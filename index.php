<?php
// index.php

// Calling Truck.php and Vehicle.php

require_once './src/Truck.php';
require_once './src/Vehicle.php';

// We're creating a first truck, which is in filling, gray, has 3 seats and is electric.
$truck1 = new Truck('in filling', 'gray', 3, 'electric');

// We're creating a second truck, which is full, red, has 2 seats and is running on fuel.

$truck2 = new Truck('full', 'red', 2, 'fuel');

/* We're calling methods created in the classes Vehicle and Truck to check that the program
   is working as it should be */

echo $truck1->start();
echo $truck2->start();

echo $truck1->forward();
echo '<br>Truck1 current speed : ' . $truck1->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck2->setCurrentSpeed(30);
echo '<br>Truck2 current speed : ' . $truck2->getCurrentSpeed() . 'km/h' . '<br><br>';

echo 'Truck1 started braking.<br>';
echo $truck1->brake();
echo 'Truck1 current speed : ' . $truck1->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck1->brake();

echo '<br>Truck2 started braking.<br>';
echo $truck2->brake();
echo 'Truck2 current speed : ' . $truck2->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck2->brake();

// We're adding and checking the energy level of the trucks

$truck1->setEnergyLevel(20);
echo '<br>Truck1 current energy level : ' . $truck1->getEnergyLevel() . '%' . '<br>';
$truck2->setEnergyLevel(50);
echo '<br>Truck2 current energy level : ' . $truck2->getEnergyLevel() . 'L' . '<br>';

// We're checking the load status of the trucks

echo '<br>Truck1 is ' . $truck1->getLoadStatus() . '.<br>';

echo '<br>Truck2 is ' . $truck2->getLoadStatus() . '.<br>';

echo "<br>Let's load truck1 !<br>";
$truck1->setLoadStatus('full');
echo '<br>Truck1 is ' . $truck1->getLoadStatus() . '.<br>';

// End of exercise ====================================================================