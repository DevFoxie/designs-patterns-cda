<?php

namespace Tests;


use App\Ship\Factory\EnemyShipFactory;
use App\Ship\HeroShip\HeroShip;
use PHPUnit\Framework\TestCase;

class ShipTest extends TestCase
{

    private array $enemyToList = ['E', 'R', 'U', 'B'];



    public function testBuild()
    {
        foreach ($this->enemyToList as $enemyType) {
            $enemyShip = EnemyShipFactory::build($enemyType);
            $this->assertInstanceOf('App\Ship\EnemyShip\EnemyShipInterface', $enemyShip);
        }
    }

    public function testTakeDamage()
    {
        $heroShip = new HeroShip(200);
        $heroShip->takeDamage(50);
        $this->assertEquals(150, $heroShip->getPoints());
    }

    public function testTakeDamageWithNegativeValue()
    {
        $heroShip = new HeroShip(200);
        $heroShip->takeDamage(-50);
        $this->assertEquals(250, $heroShip->getPoints());
    }

    public function testAttack()
    {
        $heroShip = new HeroShip(200);
        foreach ($this->enemyToList as $enemyType) {
            $enemyShip = EnemyShipFactory::build($enemyType);
            $enemyShip->attack($heroShip);
            $this->assertLessThanOrEqual(200, $heroShip->getPoints());
        }
    }


}
