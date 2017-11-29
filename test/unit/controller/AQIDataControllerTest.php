<?php

use PHPUnit\Framework\TestCase;
use AQIAPI\Controller\AQIDataController;

// TODO
// interface -> typeof
// implements
// method
// exception
// input et output des méthodes


/**
 * @covers AQIDataController
 */
final class AQIDataControllerTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertInstanceOf(
            AQIDataController::class,
            new AQIDataController()
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

    // public function outputTest(): void
    // {
    //     $this->assertEquals(
            // output du bon type,
            // méthode de AQIDataController
    //     );
    // }
}