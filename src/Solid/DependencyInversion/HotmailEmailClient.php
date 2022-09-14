<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

class HotmailEmailClient implements EmailClient
{
    public function sendEmail(EmailMessage $emailMessage): bool
    {
        return true;
    }
}
