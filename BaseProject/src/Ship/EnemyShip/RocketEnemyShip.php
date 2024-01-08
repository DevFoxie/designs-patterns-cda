<?php

namespace App\Ship\EnemyShip;

use App\Ship\HeroShip\HeroShipInterface;

class RocketEnemyShip implements EnemyShipInterface {
    public function attack(HeroShipInterface $ship) {
        $ship->takeDamage(20);
    }

    public function getName() {
        return 'a rocket enemy ship';
    }
}
