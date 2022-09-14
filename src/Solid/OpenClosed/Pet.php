<?php

declare(strict_types=1);

namespace Solid\OpenClosed;

class Pet
{
    public function walk(): void
    {
        $this->putOnLeash();
        $this->walkOutside();
    }

    public function feed($food): void
    {
        $this->pourFoodInDish($food);
    }
}
