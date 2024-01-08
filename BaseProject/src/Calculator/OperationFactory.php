<?php

namespace App\Calculator;
use App\Calculator\Interfaces\CalculationInterface;

abstract class OperationFactory
{
    public abstract function create(): CalculationInterface;
}
