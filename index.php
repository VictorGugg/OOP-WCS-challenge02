<?php
// index.php

/* On appelle Bicycle.php et Car.php pour pouvoir
   utiliser les classes Bicycle et Car.*/

require_once './src/Bicycle.php';
require_once './src/Car.php';

// On crée un nouvel objet = on instancie une classe :
$bike = new Bicycle();

// On crée un autre vélo pour vérifier que l'on peut instancier plusieurs objets en même temps sans erreur.

$Btwin = new Bicycle();

/* On a modifié les attributs en private, il faut donc utiliser
   les méthodes (public) que l'on a créé pour interagir avec :*/

$bike->setColor('blue');
$Btwin->setColor('gray');

$bike->setCurrentSpeed(0);
$Btwin->setCurrentSpeed(30);

var_dump($bike);
var_dump($Btwin);

// On instancie deux voitures, pour vérifier que l'on peut avoir deux objets actifs en même temps sans erreurs.

$Picasso = new Car('beige', 5, 'Diesel');
var_dump($Picasso);

$Ford = new Car('noire', 5, 'Sans Plomb');
var_dump($Ford);

/* On appelle ici les méthodes créées dans la classe
   pour démarrer et faire bouger les voitures */

echo $Picasso->start();
echo $Ford->start();

echo $Picasso->forward();
echo '<br>Vitesse du Picasso : ' . $Picasso->getCurrentSpeed() . 'km/h' . '<br>';
echo $Ford->setCurrentSpeed(30);
echo '<br>Vitesse de la Ford : ' . $Ford->getCurrentSpeed() . 'km/h' . '<br>';

echo $Picasso->brake();
echo '<br>Vitesse du Picasso : ' . $Picasso->getCurrentSpeed() . 'km/h' . '<br>';
echo $Picasso->brake();
echo $Ford->brake();
echo '<br>Vitesse de la Ford : ' . $Ford->getCurrentSpeed() . 'km/h' . '<br>';
echo $Ford->brake();

// On ajoute du carburant aux véhicules

$Picasso->setEnergyLevel(20);
echo '<br>Niveau de carburant du Picasso : ' . $Picasso->getEnergyLevel() . 'L' . '<br>';
$Ford->setEnergyLevel(50);
echo '<br>Niveau de carburant de la Ford : ' . $Ford->getEnergyLevel() . 'L' . '<br>';

// Fin de l'exercice ====================================================================




// Début de la quête avec des attributs publiques

// On peut définir des attributs publics depuis l'extérieur de la classe :
//  $bike->setcolor = 'blue';
//  $bike->currentSpeed = 0;
//  var_dump($bike);

/* On appelle ici les méthodes créées dans la classe
   pour faire bouger le vélo */

//  echo $bike->forward();
//  echo '<br>Vitesse du vélo : ' . $bike->currentSpeed . 'km/h' . '<br>';
//  echo $bike->brake();
//  echo '<br>Vitesse du vélo : ' . $bike->currentSpeed . 'km/h' . '<br>';
//  echo $bike->brake();