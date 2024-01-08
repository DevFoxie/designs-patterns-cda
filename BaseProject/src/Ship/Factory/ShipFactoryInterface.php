<?php

namespace App\Ship\Factory;

use App\Ship\EnemyShip\EnemyShipInterface;

interface ShipFactoryInterface {
    public static function build($shipType) : EnemyShipInterface;
}
