<?php

require_once "Calculatrice.php";

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAddition()
    {
        $calculatrice = new Calculatrice();
        $resultat = $calculatrice->addition(2, 3);
        $this->assertEquals(5, $resultat);
    }

    public function testSoustraction()
    {
        $calculatrice = new Calculatrice();
        $resultat = $calculatrice->soustraction(5, 2);
        $this->assertEquals(3, $resultat);
    }

    public function testMultiplication()
    {
        $calculatrice = new Calculatrice();
        $resultat = $calculatrice->multiplication(4, 2);
        $this->assertEquals(8, $resultat);
    }

    public function testDivision()
    {
        $calculatrice = new Calculatrice();
        $resultat = $calculatrice->division(6, 3);
        $this->assertEquals(2, $resultat);
    }

    public function testDivisionParZero()
    {
        $this->expectException(InvalidArgumentException::class);

        $calculatrice = new Calculatrice();
        $calculatrice->division(5, 0);
    }
}
