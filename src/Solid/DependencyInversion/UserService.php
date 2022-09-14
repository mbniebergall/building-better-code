<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

class UserService
{
    protected HotmailEmailClient $hotmailEmailClient;

    public function setHotmailEmailClient(HotmailEmailClient $hotmailEmailClient): void
    {
        $this->hotmailEmailClient = $hotmailEmailClient;
    }

    public function emailUser(User $user): bool
    {
        $emailMessage = new EmailMessage();
        $emailMessage->setEmailAddress($user->getEmailAddress());
        return $this->hotmailEmailClient->sendEmail($emailMessage);
    }
}


$userService = new UserService();
$userService->setHotmailEmailClient((new HotmailEmailClient()));