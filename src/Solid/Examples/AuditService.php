<?php

declare(strict_types=1);

namespace Solid\Examples;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AuditService
{
    public function auditRequest(ServerRequestInterface $request, ResponseInterface $response): void
    {
        // audit the request
    }
}
