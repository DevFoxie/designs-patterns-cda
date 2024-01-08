<?php

namespace App\BuilderThree\Ingredients;

use App\BuilderThree\Items\Drinks;

class Sprite extends Drinks
{
    public function __construct($drink)
    {
        parent::__construct($drink);
    }
}
