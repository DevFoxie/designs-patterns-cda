<?php

namespace App\BuilderThree;

use App\BuilderThree\Interfaces\MenuInterface;
use App\BuilderThree\Items\AbstractItem;

class Menu implements MenuInterface
{
    private $components;


    public function __construct(array $components)
    {
        $this->components = $components;
    }

    public function getComponent(string $item) : AbstractItem
    {
        return $this->components[$item];
    }
}
