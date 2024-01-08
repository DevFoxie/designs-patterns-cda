<?php declare(strict_types=1);

namespace Tests;

use App\Shape\ShapeFactory;
use App\Shape\Shapes\Circle;
use App\Shape\Shapes\Rectangle;
use App\Shape\Shapes\Triangle;
use App\Shape\Exceptions\ShapeUnknownException;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {

    public function testThatFactoryIsWorking()
    {
        $circle = ShapeFactory::build('circle');
        $this->assertInstanceOf(Circle::class, $circle);
    }

    public function testThatShapeUnknownExceptionIsThrown()
    {
        $this->expectException(ShapeUnknownException::class);
        $star = ShapeFactory::build('star');
        $star->draw();
    }
}
