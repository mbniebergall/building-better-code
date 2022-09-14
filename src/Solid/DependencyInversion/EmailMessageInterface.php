<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

interface EmailMessageInterface
{
    public function setEmailAddress(string $emailAddress): void;
}
