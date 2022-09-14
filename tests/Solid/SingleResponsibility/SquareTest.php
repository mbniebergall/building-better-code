<?php

declare(strict_types=1);

namespace Solid\SingleResponsibility;

use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testSquareCalculatesArea(): void
    {
        $square = new Square();
        $square->length = 5;
        $this->assertSame(25.0, $square->calculateArea());
    }
}
