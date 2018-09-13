<?php
require __DIR__ . '/vendor/autoload.php';
use Model\Car;
use Model\Parking;

//build the first car
$porsche = new Car(true,"porsche");

//Now i flat my tire
$porsche->getWheels()[$porsche->getNbWheel()-1]->setFlat(true);

//Now fix car
$porsche->setBroken(false);

// Now fix flat week
foreach($porsche->getWheels() as $wheel) {
    $wheel->setFlat(false);
}

// Car broke again
$porsche->setBroken(true);

// So we have to fix again ....
$porsche->setBroken(false);

//build a second car
$fiat = new Car(true,"fiat");

//Park cars in my parking
$parking = new Parking();
$parking->addCar($porsche);
$parking->addCar($fiat);

//take my car with brand
$myPorsche = null;
foreach($parking->getCars() as $car){
    if($car->getBrand() == 'porsche'){
        $myPorsche = $car;
    }
}

echo $myPorsche->getBrand();