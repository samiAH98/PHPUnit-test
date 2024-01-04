<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        // Arrange
        $firstValue = 4;
        $secondValue = 7;
        $expectedResult = 28;

        // Act
        $calculator = new Calculator();
        $product = $calculator->multiplication($firstValue, $secondValue);

        // Assert
        $this->assertSame($expectedResult, $product, "La méthode multiplication() ne fonctionne pas correctement.");
    }

    public function testIsEven(): void
    {
        // Arrange
        $calculator = new Calculator();

        // Test with even number
        $evenNumber = 4;
        $result1 = $calculator->isEven($evenNumber);

        // Test with odd number
        $oddNumber = 7;
        $result2 = $calculator->isEven($oddNumber);

        // Assert
        $this->assertTrue($result1, "$evenNumber devrait être pair.");
        $this->assertFalse($result2, "$oddNumber devrait être impair.");
    }
}