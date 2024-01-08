<?php

namespace App\BuilderThree\Items;

use App\BuilderThree\Items\AbstractItem;

abstract class Burgers extends AbstractItem
{
    public function __construct(string $burger)
    {
        parent::__construct($burger);
    }
}
