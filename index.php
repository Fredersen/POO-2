<?php

// Les fichiers requis :

require 'Car.php';
require 'Bicycle.php';
require 'Truck.php';

// Challenge sur l'objet Camion :

$pouetPouet = new Truck('red', 3, 'fuel', 100);
var_dump($pouetPouet);

$pouetPouet->setEnergyLevel(90);
var_dump($pouetPouet);

$pouetPouet->setCurrentSpeed(0);
echo '<br> Speed of the truck : ' . $pouetPouet->getCurrentSpeed() . 'km/h </br>';
echo $pouetPouet->forward();
echo '<br> Speed of the truck  : ' . $pouetPouet->getCurrentSpeed() . 'km/h </br>';
echo $pouetPouet->brake();
echo '<br> Speed of the truck  : ' . $pouetPouet->getCurrentSpeed() . 'km/h </br>';

// Si le niveau d'energie est inférieur à 100(pourcent), la fonction répond in filling.

echo $pouetPouet->isFull();


// Challenge sur l'objet Car :

$twingo = new Car('Yelow', 4, 'diesel');

// Déplacement de la voiture :
$twingo->setCurrentSpeed(0);
echo '<br> Speed of the car : ' . $twingo->getCurrentSpeed() . 'km/h </br>';
echo $twingo->forward();
echo '<br> Speed of the car  : ' . $twingo->getCurrentSpeed() . 'km/h </br>';
echo $twingo->brake();
echo '<br> Speed of the car  : ' . $twingo->getCurrentSpeed() . 'km/h </br>';



// Quete 1 : Cours sur l'objet Bicycle :

$bike = new Bicycle('Blue', 1);

// Moving bike
$bike->setCurrentSpeed(0);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('Yellow', 1);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('Black', 1);


