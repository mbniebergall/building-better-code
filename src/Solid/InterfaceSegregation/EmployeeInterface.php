<?php

declare(strict_types=1);

namespace Solid\InterfaceSegregation;

interface EmployeeInterface
{
    public function checkEmail(): bool;

    public function createPullRequest(): PullRequest;

    public function attendMeeting(Meeting $meeting): void;
}
