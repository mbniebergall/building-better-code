<?php

declare(strict_types=1);

namespace Solid\OpenClosed;

class ParseString
{
    public string $string;

    public function parseCsv(): array
    {
        $data = [];
        $lines = explode(PHP_EOL, $this->string);
        foreach ($lines as $row) {
            $data[] = explode(',', $row);
        }
        return $data;
    }

    public function parseXml(): \SimpleXMLElement
    {
        return new \SimpleXMLElement($this->string);
    }
}
