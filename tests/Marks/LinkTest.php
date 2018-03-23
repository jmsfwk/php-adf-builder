<?php

use Jmsfwk\Adf\Marks\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{

    /** @test */
    public function link()
    {
        $link = new Link('https://example.com');
        $doc = $link->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'link',
            'attrs' => [
                'href' => 'https://example.com',
            ],
        ]));
    }

    /** @test */
    public function with_optional_title()
    {
        $link = new Link('https://example.com', 'a title');
        $doc = $link->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'link',
            'attrs' => [
                'href' => 'https://example.com',
                'title' => 'a title',
            ],
        ]));
    }
}
