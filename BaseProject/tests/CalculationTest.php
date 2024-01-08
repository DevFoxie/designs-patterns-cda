<?php

namespace Tests;


use App\Calculator\AdditionFactory;
use App\Calculator\Interfaces\CalculationInterface;
use App\Calculator\OperationFactory;
use App\Calculator\SoustractionFactory;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{

    /**
     * @var OperationFactory
     */
    private $factory;

    /**
     * @var CalculationInterface
     */
    private $calculation;

    public function testAdditionCalculation()
    {
        $this->factory = new AdditionFactory();
        $this->assertInstanceOf(OperationFactory::class, $this->factory);

        $this->calculation = $this->factory->create();
        $this->assertInstanceOf(CalculationInterface::class, $this->calculation);

        $result = $this->calculation->calculate(5, 3);
        echo '5+3 =' . $result;
        $this->assertEquals(8, $result);
    }

    public function testSoustractionCalculation()
    {
        $this->factory = new SoustractionFactory();
        $this->assertInstanceOf(OperationFactory::class, $this->factory);

        $this->calculation = $this->factory->create();
        $this->assertInstanceOf(CalculationInterface::class, $this->calculation);

        $result = $this->calculation->calculate(5, 3);
        echo '5-3 =' . $result;
        $this->assertEquals(2, $result);
    }
}

