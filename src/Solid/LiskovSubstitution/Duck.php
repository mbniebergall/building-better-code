<?php

declare(strict_types=1);

namespace Solid\LiskovSubstitution;

class Duck
{
    public function fly(): bool
    {
        // ducks can fly!
        return true;
    }
}
