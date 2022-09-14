<?php

declare(strict_types=1);

namespace Solid\InterfaceSegregation;

class Developer implements EmployeeInterface
{
    public function checkEmail(): bool
    {
        return true;
    }

    public function createPullRequest(): PullRequest
    {
        return new PullRequest();
    }

    public function attendMeeting(Meeting $meeting): void
    {
        // TODO: Implement attendMeeting() method.
    }
}
