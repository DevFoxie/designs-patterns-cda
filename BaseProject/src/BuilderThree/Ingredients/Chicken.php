<?php

namespace App\BuilderThree\Ingredients;

use App\BuilderThree\Items\Burgers;

class Chicken extends Burgers
{
    public function __construct($burger)
    {
        parent::__construct($burger);
    }

}
