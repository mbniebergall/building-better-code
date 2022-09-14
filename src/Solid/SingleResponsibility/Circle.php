<?php

declare(strict_types=1);

namespace Solid\SingleResponsibility;

class Circle extends Shape
{
    public float $radius;

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
