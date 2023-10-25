<?php

require_once "Calculatrice.php";

use PHPUnit\Framework\TestCase;

class CalculatriceIntegrationTest extends TestCase
{
    public function testOperations()
    {
        $calculatrice = new Calculatrice();

        $resultat = $calculatrice->addition(2, 3);
        $this->assertEquals(5, $resultat);

        $resultat = $calculatrice->multiplication($resultat, 2);
        $this->assertEquals(10, $resultat);

        $resultat = $calculatrice->soustraction($resultat, 3);
        $this->assertEquals(7, $resultat);

        $resultat = $calculatrice->division($resultat, 2);
        $this->assertEquals(3.5, $resultat);
    }
}
