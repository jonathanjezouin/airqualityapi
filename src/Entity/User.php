<?php

namespace AQIAPI\Entity;

class User
{
    private $id;
    private $signature;

    public function __construct($id, $sign)
    {
        $this->id = $id;
        $this->signature = $sign;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
    }
}