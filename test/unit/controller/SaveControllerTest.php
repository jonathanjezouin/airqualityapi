<?php

use PHPUnit\Framework\TestCase;
use AQIAPI\Controller\SaveController;
use AQIAPI\Entity\User;
use AQIAPI\Entity\Place;
use AQIAPI\Entity\Aqi;


// TODO
// interface -> typeof
// implements
// method
// exception
// input et output des méthodes


/**
 * @covers SaveController
 */
final class SaveControllerTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertInstanceOf(
            SaveController::class,
            new SaveController()
        );
    }

    // TODO
    // Test d'exception
    // soit par la méthode commentée ci-dessous
    // soit grace à l'annotation @expectedException
    
    // public function exceptionTest(): void
    // {
        // $this->expectException(expectedException::class);
        // invocation d'une méthode de AQIDataController
    // }

    // TODO
    // Test de output (et d'input)
    // par la méthode commentée ci-dessous
    
    public function testSelectPlaceById(): void
    {
        $sc = new SaveController();
        $this->assertInstanceOf(
            Place::class,
            $sc->selectPlaceById(1)
        );
    }

    public function testCreateUser(): void
    {
        $sc = new SaveController();
        $user = new User();

        $sc->createUser($user);

        $this->assertNull(null);
    }


    
}
