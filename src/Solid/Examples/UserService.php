<?php

declare(strict_types=1);

namespace Solid\Examples;

use Solid\DependencyInversion\EmailClient;

class UserService
{
    public function __construct(
        protected DbAdapter $dbAdapter,
        protected EmailClient $emailClient
    ) {
    }
}
