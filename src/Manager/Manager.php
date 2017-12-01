<?php

namespace AQIAPI\Manager;

use stdClass;
use PDO;
use Exception;

class Manager
{

    private static $instance;

    private $dbh;

    private function __construct()
    {

    }

    private function getConfiguration(): stdClass
    {
        $fileName = __DIR__ . "/../../app/config.json";
        if (!is_file($fileName)) {
            throw new Exception("config.json must exists in app");
        } else if (!($jsonText = file_get_contents($fileName))) {
            throw new Exception("Can't read config.json");
        } else if (!($json = json_decode($jsonText))) {
            throw new Exception("config.json mal formed");
        } else if (!isset($json->dsn)
            || !isset($json->user)
            || !isset($json->pswd)) {
                throw new Exception("config.json must have dsn, user and pswd");
        }
       return $json;
    }

    public static function getInstance(): Manager
    {
        if (null === Manager::$instance) {
            Manager::$instance = new Manager;
        }
        return Manager::$instance;
    }

    public static function getPDO(): PDO
    {
        if(!Manager::getInstance()->dbh) {
            $config = Manager::$instance->getConfiguration();
            $dsn = $config->dsn;
            $user= $config->user;
            $pswd= $config->pswd;

             Manager::$instance->dbh = new PDO($dsn, $user, $pswd);
             Manager::$instance->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
        return Manager::$instance->dbh;
    }

   

}
