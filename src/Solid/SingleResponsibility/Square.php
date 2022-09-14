<?php

declare(strict_types=1);

namespace Solid\SingleResponsibility;

class Square
{
    public float $length;

    public function calculateArea(): float
    {
        return $this->length * $this->length;
    }

    public function calculateCircleArea(float $radius): float
    {
        return pi() * pow($radius, 2);
    }
}
