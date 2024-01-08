<?php

namespace App\Ship\EnemyShip;

use App\Ship\HeroShip\HeroShipInterface;

class UfoEnemyShip implements EnemyShipInterface {
    public function attack(HeroShipInterface $ship) {
        $ship->takeDamage(30);
    }

    public function getName() {
        return 'an ufo enemy ship';
    }
}
