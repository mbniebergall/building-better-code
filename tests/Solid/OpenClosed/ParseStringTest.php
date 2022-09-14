<?php

declare(strict_types=1);

namespace Solid\OpenClosed;

use PHPUnit\Framework\TestCase;

class ParseStringTest extends TestCase
{
    public function testCsv(): void
    {
        $parseString = new ParseString();
        $parseString->string = 'abc,123';
        $data = $parseString->parseCsv();

        $this->assertSame([['abc', '123']], $data);
    }

    public function testXml(): void
    {
        $parseString = new ParseString();
        $parseString->string = '<data><name>abc</name><value>123</value></data>';
        $xml = $parseString->parseXml();

        $this->assertInstanceOf(\SimpleXMLElement::class, $xml);
    }
}
