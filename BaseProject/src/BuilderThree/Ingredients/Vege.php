<?php

namespace App\BuilderThree\Ingredients;

use App\BuilderThree\Items\Burgers;

class Vege extends Burgers
{
    public function __construct($burger)
    {
        parent::__construct($burger);
    }
}
