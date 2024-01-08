<?php

namespace App\Calculator;

use App\Calculator\Interfaces\CalculationInterface;

class AdditionFactory extends OperationFactory
{
    public function create(): CalculationInterface
    {
        return new AdditionCalculation();
    }
}
