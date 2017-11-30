<?php

use PHPUnit\Framework\TestCase;
use AQIAPI\Controller\SaveController;

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
    
    // public function testOutput(): void
    // {
    //     $sc = new SaveController();
    //     $this->assertEquals(
    //         "totu",
    //         $sc->getToto()
    //     );
    // }
}