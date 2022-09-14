<?php

declare(strict_types=1);

namespace Solid\OpenClosed;

class ParseAbstract
{
    protected string $string;

    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function parse()
    {

    }
}
