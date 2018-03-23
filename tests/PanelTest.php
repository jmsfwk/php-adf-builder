<?php

use Jmsfwk\Adf\Panel;
use PHPUnit\Framework\TestCase;

class PanelTest extends TestCase
{
    /** @test */
    public function empty_panel()
    {
        $doc = (new Panel('info'))->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'panel',
            'attrs' => [
                'panelType' => 'info',
            ],
            'content' => [],
        ]));
    }

    /** @test */
    public function panel_with_text()
    {
        $doc = (new Panel('info'))
            ->paragraph()
            ->text('Hi there')
            ->end()
            ->toJSON();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'panel',
            'attrs' => [
                'panelType' => 'info',
            ],
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Hi there',
                        ],
                    ],
                ],
            ],
        ]));
    }

    /** @test */
    public function panel_with_emoji()
    {
        $doc = (new Panel('info'))
            ->paragraph()
            ->emoji('smile', '123', 'fallback')
            ->end()
            ->toJSON();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'panel',
            'attrs' => [
                'panelType' => 'info',
            ],
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'emoji',
                            'attrs' => [
                                'shortName' => ':smile:',
                                'code' => '123',
                                'fallback' => 'fallback',
                            ],
                        ],
                    ],
                ],
            ],
        ]));
    }
}
