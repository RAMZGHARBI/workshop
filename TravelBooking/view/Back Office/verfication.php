<?php
require_once __DIR__ . '/../../Model/TravelOffer.php';
require_once __DIR__ . '/../../Controller/TravelOfferController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['title']) && !empty($_POST['title']) &&
        isset($_POST['destination']) && !empty($_POST['destination']) &&
        isset($_POST['departure-date']) && !empty($_POST['departure-date']) &&
        isset($_POST['return-date']) && !empty($_POST['return-date']) &&
        isset($_POST['price']) && !empty($_POST['price']) &&
        isset($_POST['category']) && !empty($_POST['category'])
    
    ) {
        $title = $_POST['title'];
        $destination = $_POST['destination'];
        $departure = $_POST['departure-date'];
        $return = $_POST['return-date'];
        $price = (float)$_POST['price'];
        $category = $_POST['category'];
        $availability = isset($_POST['availability']) ? true : false;

        $offer1 = new TravelOffer($title, $destination, $departure, $return, $price,$category, $availability,$offer1); 
//question 4
        echo"avec la methode var_dump";
        var_dump($offer1);
//question 5
        echo "<h2>Informations de l'offre (showTravelOffer) :</h2>";
        $controller = new TravelOfferController();
        $controller->showTravelOffer($offer1);
    } else {
        echo "Verifier les champs .";
    }
} 


?>