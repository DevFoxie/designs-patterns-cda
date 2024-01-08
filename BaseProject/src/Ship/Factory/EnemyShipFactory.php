<?php

namespace App\Ship\Factory;

use App\Ship\EnemyShip\BigUfoEnemyShip;
use App\Ship\EnemyShip\EnemyShip;
use App\Ship\EnemyShip\EnemyShipInterface;
use App\Ship\EnemyShip\RocketEnemyShip;
use App\Ship\EnemyShip\UfoEnemyShip;
use PHPUnit\Framework\Exception;

class EnemyShipFactory implements ShipFactoryInterface {
    public static function build($shipType) : EnemyShipInterface {
        switch ($shipType) {
            case 'E':
                return new EnemyShip();
            case 'R':
                return new RocketEnemyShip();
            case 'U':
                return new UfoEnemyShip();
            case 'B':
                return new BigUfoEnemyShip();
            default:
                throw new Exception("Unknown ship type: $shipType");
        }
    }
}
