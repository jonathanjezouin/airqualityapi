<?php

namespace AQIAPI\Controller;

use AQIAPI\Http\Response;
use AQIAPI\Entity\User;
use AQIAPI\Entity\Place;
use AQIAPI\Entity\Aqi;

class SaveController {

    function createUser (User $user): void
    {
        // TODO
    }

    function selectUserBySignature ($signature): User
    {
        // TODO

        $user = new User();

        return $user;
    }

    function createPlace (Place $place): void
    {
        // TODO
    }

    function createAqi (Aqi $aqi): void
    {
        // TODO
    }

    function selectPlaceByUserAndName (): Place
    {
        // TODO

        $place = new Place();
        
        return $place;
    }

    function selectAllPlaceByUser (): array
    {
        // TODO

        $place = new Place();
        
        return $place;
    }
  
}