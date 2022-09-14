<?php

declare(strict_types=1);

namespace Solid\LiskovSubstitution;

use PHPUnit\Util\Exception;

class RubberDuck extends Duck
{
    public function fly(): bool
    {
        // rubber ducks can't fly
        return false;
    }
}
