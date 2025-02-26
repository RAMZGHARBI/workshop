<?php
require_once __DIR__ . '/../../Model/TravelOffer.php'; 

// Créer une offre de voyage avec le constructeur
$offre1 = new TravelOffer(1, "Paris", "Voyage à Paris", 500, "2023-12-01", "2023-12-07" ,1,"cultural");

//Afficher avec var_dump
echo "<h3>Affichage avec var_dump() :</h3>";
var_dump($offre1);

// Afficher avec la méthode show()
echo "<h3>Affichage avec la méthode show() :</h3>";
$offre1->show();

?>