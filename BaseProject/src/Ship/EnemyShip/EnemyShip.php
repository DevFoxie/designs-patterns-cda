<?php

namespace App\Ship\EnemyShip;

use App\Ship\HeroShip\HeroShipInterface;

class EnemyShip implements EnemyShipInterface {
    public function attack(HeroShipInterface $ship) {
        $ship->takeDamage(10);
    }

    public function getName() {
        return 'an enemy ship';
    }
}
