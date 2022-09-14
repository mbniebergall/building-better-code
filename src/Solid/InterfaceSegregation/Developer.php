<?php

declare(strict_types=1);

namespace Solid\InterfaceSegregation;

class Developer implements EmployeeInterface
{

    public function checkEmail(): bool
    {
        // TODO: Implement checkEmail() method.
    }

    public function createPullRequest(): PullRequest
    {
        // TODO: Implement createPullRequest() method.
    }

    public function attendMeeting(Meeting $meeting): void
    {
        // TODO: Implement attendMeeting() method.
    }
}
