<?php

namespace App\Shape;
use App\Shape\Exceptions\ShapeUnknownException;
use App\Shape\Shapes\Circle;
use App\Shape\Shapes\Rectangle;
use App\Shape\Shapes\Triangle;
use App\Shape\Interfaces\ShapeFactoryInterface;

class ShapeFactory implements ShapeFactoryInterface {

    public static function build($shape)
    {
        switch ($shape) {
            case 'circle':
                return new Circle();
            case 'rectangle':
                return new Rectangle();
            case 'triangle':
                return new Triangle();
            default:
                throw new ShapeUnknownException("Unknown shape type: $shape");
        }
    }
}
