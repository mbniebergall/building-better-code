<?php

declare(strict_types=1);

namespace Solid\Examples;

interface HydratorInterface
{
    public function hydrate(array $data);
}
