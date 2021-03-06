<?php

namespace AQIAPI\Entity;

class Place
{
    private $id;
    private $name;
    private $userId;
    private $lat;
    private $lng;

    public function __construct($id, $name, $userId, $lat, $lng)
    {
        $this->id = $id;
        $this->name = $name;
        $this->userId = $userId;
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    public function getLng()
    {
        return $this->lng;
    }

    public function setLng($lng)
    {
        $this->lng = $lng;
    }
}