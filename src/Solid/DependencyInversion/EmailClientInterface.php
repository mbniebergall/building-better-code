<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

interface EmailClientInterface
{
    public function sendEmail(EmailMessage $emailMessage): bool;
}
