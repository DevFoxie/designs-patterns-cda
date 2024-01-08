<?php
namespace App\BuilderThree\Interfaces;

use App\BuilderThree\Interfaces\MealBuilderInterface;
use App\BuilderThree\Interfaces\MenuInterface;


interface MasterInterface
{
    public function build(): MenuInterface;

    public function getBuilder(): MealBuilderInterface;
    public function setBuilder(MealBuilderInterface $builder): MasterInterface;
}
