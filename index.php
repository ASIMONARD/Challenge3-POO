<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'Vehicle.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motor = new MotorWay();
$car = new Car();
$car2 = new Car();
$car3 = new Car();

echo 'Motor way : <br>';
echo 'Number lane : ' . $motor->getNbLane() . ' voies <br>';
echo 'Max speed : ' . $motor->getMaxSpeed() . ' km/h <br><br>';
echo 'Voiture 1 autorisée :' . $motor->addVehicle($car) . '<br>';
echo 'Voiture 2 autorisée :' . $motor->addVehicle($car2) . '<br>';
echo 'Voiture 3 autorisée :' . $motor->addVehicle($car3) . '<br>';

var_dump($motor);


$pedestr = new PedestrianWay();
$bike = new Bike();
$skate = new Skateboard();
$bike2 = new Bike();
$skate2 = new Skateboard();

echo 'pedestrian way : <br>';
echo 'Number lane : ' . $pedestr->getNbLane() . ' voies <br>';
echo 'Max speed : ' . $pedestr->getMaxSpeed() . ' km/h <br><br>';
echo 'Vélo 1 autorisée :' . $pedestr->addVehicle($bike) . '<br>';
echo 'Vélo 2 autorisée :' . $pedestr->addVehicle($bike2) . '<br>';

var_dump($pedestr);

echo 'Skateboard 1 autorisée :' . $pedestr->addVehicle($skate) . '<br>';
echo 'Skateboard 2 autorisée :' . $pedestr->addVehicle($skate2) . '<br>';

var_dump($pedestr);


$pedestr = new ResidentialWay();
$car = new car();
$bike = new Bike();
$skate = new Skateboard();

echo 'Residential way : <br>';
echo 'Number lane : ' . $pedestr->getNbLane() . ' voies <br>';
echo 'Max speed : ' . $pedestr->getMaxSpeed() . ' km/h <br><br>';

echo 'Voitures autorisées :' . $pedestr->addVehicle($car) . '<br>';
echo 'Vélos autorisée :' . $pedestr->addVehicle($bike) . '<br>';
echo 'Skateboards autorisés :' . $pedestr->addVehicle($skate) . '<br>';

var_dump($car, $bike, $skate);

?>