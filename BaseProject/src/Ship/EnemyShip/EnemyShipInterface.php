<?php

namespace App\Ship\EnemyShip;

use App\Ship\HeroShip\HeroShipInterface;

interface EnemyShipInterface {
    public function attack(HeroShipInterface $ship);
    public function getName();
}
