<?php

use Jmsfwk\Adf\Blockquote;
use PHPUnit\Framework\TestCase;

class BlockquoteTest extends TestCase
{
    /** @test */
    public function empty_block_quote()
    {
        $doc = json_encode(new Blockquote());

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'blockquote',
            'content' => [],
        ]));
    }

    /** @test */
    public function block_quote_with_text()
    {
        $doc = (new Blockquote())
            ->paragraph()
            ->text('Hi there')
            ->end()
            ->toJSON();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'blockquote',
            'content' => [
                [
                    'type'=> 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Hi there',
                        ]
                    ],
                ],
            ],
        ]));
    }

    /** @test */
    public function block_quote_with_emoji()
    {
        $doc = (new Blockquote())
            ->paragraph()
            ->emoji('smile', '123', 'fallback')
            ->end()
            ->toJSON();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'blockquote',
            'content' => [
                [
                    'type'=> 'paragraph',
                    'content' => [
                        [
                            'type' => 'emoji',
                            'attrs' => [
                                'shortName' => ':smile:',
                                'fallback' => 'fallback',
                                'code' => '123',
                            ],
                        ]
                    ],
                ],
            ],
        ]));
    }
}
