<?php

declare(strict_types=1);

namespace Solid\OpenClosed;

abstract class PetAbstract
{
    public function __construct(protected string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function feed(Food $food): void;
}
