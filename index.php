<?php
// index.php

require_once 'Bicycle.php';
require_once 'car.php';

$bike = new Bicycle();


$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';
$tornado->forward();


$break = new Car('black', 5, 80);

echo $break->start() . '<br>';
echo $break->forward();
echo '<br> Vitesse de la voiture : ' . $break->GetCurrentSpeed() . ' km/h' . '<br>';
echo $break->brake();
echo '<br> Vitesse de la voiture : ' . $break->GetCurrentSpeed() . ' km/h' . '<br>';
echo $break->brake();