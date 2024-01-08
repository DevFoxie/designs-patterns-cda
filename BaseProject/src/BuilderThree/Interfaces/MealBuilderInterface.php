<?php

namespace App\BuilderThree\Interfaces;

use App\BuilderThree\Items\AbstractItem;
use App\BuilderThree\Interfaces\MenuInterface;


interface MealBuilderInterface
{
    /**
     * @param AbstractItem $item
     * @return MealBuilderInterface
     */
    public function setItem(AbstractItem $item): MealBuilderInterface;

    /**
     * @return MenuInterface
     */
    public function getMenu(): MenuInterface;

    public function eraseMenu(): MealBuilderInterface;
}
