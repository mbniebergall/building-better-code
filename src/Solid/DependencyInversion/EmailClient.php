<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

interface EmailClient
{
    public function sendEmail(EmailMessage $emailMessage): bool;
}
