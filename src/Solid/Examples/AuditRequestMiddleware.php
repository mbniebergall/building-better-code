<?php

declare(strict_types=1);

namespace Solid\Examples;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuditRequestMiddleware implements MiddlewareInterface
{
    public function __construct(protected AuditService $auditService)
    {
    }

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {
        $response = $handler->handle($request);
        $this->auditService->auditRequest($request, $response);
        return $response;
    }
}
