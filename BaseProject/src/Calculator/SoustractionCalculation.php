<?php

namespace App\Calculator;

use App\Calculator\Interfaces\CalculationInterface;

class SoustractionCalculation implements CalculationInterface
{

    public function calculationType(): CalculationInterface
    {
        return $this;
    }

    public function calculate(float $a, float $b): float
    {
        return $a - $b;
    }
}
