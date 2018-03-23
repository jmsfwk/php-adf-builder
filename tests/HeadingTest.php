<?php

use Jmsfwk\Adf\Heading;
use PHPUnit\Framework\TestCase;

class HeadingTest extends TestCase
{
    /** @test */
    public function heading_with_text()
    {
        $heading = (new Heading(2))->text('heading text');
        $doc = $heading->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'heading',
            'attrs' => [
                'level' => 2,
            ],
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'heading text',
                ],
            ],
        ]));
    }
}
