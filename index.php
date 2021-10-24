<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward(). '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->setCurrentSpeed(0). 0 .' km/h' . '<br>';

require_once 'Truck.php';

$truck = new Truck('red', 2, 'fuel', 0);
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->setCurrentSpeed(0) . 70 .' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo $truck->load() . '<br>';

require_once 'Car.php';

$car = new Car('green', 4, 'electric');

try {
    $car->start();
} catch(Exception $e){
    $car->setParkBrake(false);
} finally {
    echo "My car rolls like a donut";
}



