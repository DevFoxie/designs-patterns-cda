<?php

namespace App\BuilderThree\Items;

use App\BuilderThree\Items\AbstractItem;

abstract class Drinks extends AbstractItem
{
    public function __construct(string $drink)
    {
        parent::__construct($drink);
    }
}
