<?php

namespace Jmsfwk\Adf\Inline;

use Jmsfwk\Adf\Marks\Mark;

class Text extends InlineNode
{
    protected $type = 'text';
    /** @var string */
    private $text;

    public function __construct(string $text, Mark ...$marks)
    {
        $this->text = $text;
        foreach ($marks as $mark) {
            $this->addMark($mark);
        }
    }

    public function jsonSerialize()
    {
        $result = parent::jsonSerialize();
        $result['text'] = $this->text;

        return $result;
    }
}
