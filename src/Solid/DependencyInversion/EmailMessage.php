<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

class EmailMessage implements EmailMessageInterface
{
    protected string $emailAddress;

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }
}
