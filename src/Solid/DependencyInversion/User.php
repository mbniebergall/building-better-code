<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

class User
{
    protected string $emailAddress;

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
