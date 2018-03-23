<?php

use Jmsfwk\Adf\Inline\Hardbreak;
use PHPUnit\Framework\TestCase;

class HardbreakTest extends TestCase
{
    /** @test */
    public function hardbreak()
    {
        $hardbreak = new Hardbreak();
        $doc = $hardbreak->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'hardBreak',
        ]));
    }
}
