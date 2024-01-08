<?php

namespace App\BuilderThree\Interfaces;

use App\BuilderThree\Items\AbstractItem;

interface MenuInterface
{
    /**
     * @return array
     */
    public function getComponent(string $item): AbstractItem;
}
