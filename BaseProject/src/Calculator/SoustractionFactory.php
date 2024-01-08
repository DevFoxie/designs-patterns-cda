<?php

namespace App\Calculator;
use App\Calculator\Interfaces\CalculationInterface;

class SoustractionFactory extends OperationFactory
{
    public function create(): CalculationInterface
    {
        return new SoustractionCalculation();
    }
}
