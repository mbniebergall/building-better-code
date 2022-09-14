<?php

declare(strict_types=1);

namespace Solid\SingleResponsibility;

abstract class Shape
{
    abstract public function calculateArea(): float;
}
