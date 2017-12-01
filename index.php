<?php
use AQIAPI\Controller\SaveController;
use AQIAPI\Entity\User;
use AQIAPI\Entity\Place;

require_once "./vendor/autoload.php";    


// Exemples pour solliciter

// Intéressants :
// - la création de user
// - la création de place
// - la création en transaction de user et place (dans l'exemple ci dessous, le user peut être créé,
//          mais pas la place, impliquant l'échec de toute la transaction
//          et donc la non création du user)
// - le select qui renvoie un json dans le navigateur


$sc = new SaveController();
// $user = new User(6, "toto");
// $sc->createUser($user);

$sc->selectUserBySignature("toto");

// $sc->createPlace(new Place(1, "test", 1, 0, 0));

// $sc->createUserPlaceTransaction(
//     new User(1, "titi"),
//     new Place(1, "test", 999, 0, 0)
// );
