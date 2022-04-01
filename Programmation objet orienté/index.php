<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car::ALLOWED_ENERGIES);


require_once 'Camion.php';

$camion = new Camion("Red",3,"Benzin",10);
$a=$camion->getCapacityStock();
$b=$camion->setCharge(9);

echo($camion->infilling($a,$b));

var_dump($camion);




