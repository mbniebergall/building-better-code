<?php

declare(strict_types=1);

namespace Solid\DependencyInversion;

class ContactService
{
    protected EmailClientInterface $emailClient;

    public function setEmailClient(EmailClientInterface $emailClient): void
    {
        $this->emailClient = $emailClient;
    }

    public function sendEmail(
        Contact $contact,
        EmailMessageInterface $emailMessage
    ): bool {
        $emailMessage->setEmailAddress($contact->getEmailAddress());
        return $this->emailClient->sendEmail($emailMessage);
    }
}


$contactService = new ContactService();
$contactService->setEmailClient(new HotmailEmailClient());
$contactService->email(new Contact());