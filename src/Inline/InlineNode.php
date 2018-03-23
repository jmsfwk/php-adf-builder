<?php

namespace Jmsfwk\Adf\Inline;

use Jmsfwk\Adf\Marks\Mark;
use Jmsfwk\Adf\Node;

class InlineNode extends Node
{
    private $marks = [];

    protected function addMark(Mark $mark)
    {
        $this->marks[] = $mark;
    }

    public function jsonSerialize()
    {
        $result = parent::jsonSerialize();
        if ($this->marks) {
            $result['marks'] = $this->marks;
        }

        return $result;
    }
}
