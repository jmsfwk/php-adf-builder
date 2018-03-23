<?php

use Jmsfwk\Adf\CodeBlock;
use PHPUnit\Framework\TestCase;

class CodeBlockTest extends TestCase
{
    /** @test */
    public function codeblock_with_language()
    {
        $codeblock = (new CodeBlock('python'))->text('import antigravity');
        $doc = $codeblock->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'codeBlock',
            'attrs' => [
                'language' => 'python',
            ],
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'import antigravity',
                ],
            ],
        ]));
    }

    /** @test */
    public function codeblock_without_language()
    {
        $codeblock = (new CodeBlock())->text('import antigravity');
        $doc = $codeblock->toJson();

        $this->assertJsonStringEqualsJsonString($doc, json_encode([
            'type' => 'codeBlock',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'import antigravity',
                ],
            ],
        ]));
    }
}
