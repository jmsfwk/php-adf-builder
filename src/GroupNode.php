<?php

namespace Jmsfwk\Adf;

class GroupNode extends Node
{
    private $parent;
    private $content = [];

    public function __construct($parent = null)
    {
        $this->parent = $parent;
    }

    protected function append($node): void
    {
        $this->content[] = $node;
    }

    public function end()
    {
        return $this->parent;
    }

    public function jsonSerialize()
    {
        $result = parent::jsonSerialize();
        $result['content'] = $this->content;

        return $result;
    }
}
