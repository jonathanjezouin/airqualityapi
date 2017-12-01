<?php

namespace AQIAPI\Controller;

use AQIAPI\Entity\User;
use AQIAPI\Entity\Place;
use AQIAPI\Entity\Aqi;
use AQIAPI\Manager\Manager;

use PDO;

class SaveController {

    function createUser (User $user): void
    {
        $dbh = Manager::getPDO();

        $sql = "INSERT INTO `user`(`userId`, `userSignature`) VALUES (:id, :signature)";

        try {
            $sth = $dbh->prepare($sql);
            $sth->bindValue(":id", $user->getId());
            $sth->bindValue(":signature", $user->getSignature());
            $sth->execute();
            echo "fin de la requete createUser";
        
        } catch (Throwable $e) {
            echo "erreur requete createUser";
            echo $e->getMessage();
        }
    }

    function selectUserBySignature ($sign): User
    {
        $dbh = Manager::getPDO();
        
        $sql = "SELECT * FROM `user`" . " WHERE `userSignature` = :param";

        try {
            $sth = $dbh->prepare($sql);
            $sth->bindValue(":param", $sign);
            $sth->execute();
            $results = $sth->fetchAll(PDO::FETCH_OBJ);

            if(count($results) > 0) {
                header("Content-Type: application/json"); // déclare un header json
                echo json_encode($results); // enrichi le json, ici $results vient d'une base
                                            // et est donc déjà bien formaté
                return new User((int) $results[0]->userId, $results[0]->userSignature);
            }
            throw new Exception("Pas de user trouvé");
        
        } catch (Throwable $e) {
            echo "erreur requete selectUserBySignature";
            echo $e->getMessage();
        }
    }

    function createUserPlaceTransaction(User $user, Place $place)
    {
        $dbh = Manager::getPDO();

        try {
            if(! $dbh->inTransaction()) {
                $dbh->beginTransaction();
            }
            $this->createUser($user);
            $id = $dbh->lastInsertId();
            $this->createPlace($place);
            $dbh->commit(); // commit et ferme la transaction
        } catch(Throwable $e) {
            $dbh->rollback();
            var_dump($e);
        }
        
        // $sql = "INSERT INTO `user`" . "(`userId`, `userSignature`)" . " VALUES (:id, :signature)";

        // try {
        //     $sth = $dbh->prepare($sql);
        //     $sth->bindValue(":id", $place->getId());
        //     $sth->bindValue(":signature", $place->getSignature());
        //     $sth->execute();
        //     echo "fin de la requete createUser";
        
        // } catch (Throwable $e) {
        //     echo "erreur requete createUser";
        //     echo $e->getMessage();
        // }
    }

    function createPlace (Place $place): void
    {
        $dbh = Manager::getPDO();
        
        $sql = "INSERT INTO `place`(`placeId`, `placeName`, `placeUserId`, `placeLat`, `placeLng`)"
        . " VALUES (:id, :name, :userId, :lat, :lng)";

        try {
            $sth = $dbh->prepare($sql);
            $sth->bindValue(":id", $place->getId());
            $sth->bindValue(":name", $place->getName());
            $sth->bindValue(":userId", $place->getUserId());
            $sth->bindValue(":lat", $place->getLat());
            $sth->bindValue(":lng", $place->getLng());
            $sth->execute();
            echo "fin de la requete createUser";
        
        } catch (Throwable $e) {
            echo "erreur requete createUser";
            echo $e->getMessage();
        }
    }

    function createAqi (Aqi $aqi): void
    {
        // TODO
    }

    function selectPlaceById ($placeId): Place
    {
        // TODO

        $place = new Place();
        
        return $place;
    }

    function selectAllPlaceByUser (): array
    {
        // TODO

        $placePlaces = [];
        
        return $placePlaces;
    }

    function selectStationByCountry (): array
    {
        // TODO

        $stations = [];
        
        return $stations;
    }

    function selectStationByCity (): array
    {
        // TODO

        $stations = [];
        
        return $stations;
    }

    function selectAQIByStationByPeriod (): array
    {
        // TODO

        $aqis = [];
        
        return $aqis;
    }
  
}