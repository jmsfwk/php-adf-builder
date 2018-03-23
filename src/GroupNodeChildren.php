<?php

namespace Jmsfwk\Adf;

trait GroupNodeChildren
{
    abstract protected function append($node);

    public function paragraph(): Paragraph
    {
        $paragraph = new Paragraph($this);
        $this->append($paragraph);

        return $paragraph;
    }

    public function blockquote(): Blockquote
    {
        $blockquote = new Blockquote($this);
        $this->append($blockquote);

        return $blockquote;
    }

    public function heading(int $level): Heading
    {
        $heading = new Heading($level, $this);
        $this->append($heading);

        return $heading;
    }

    public function codeblock(string $language = null): CodeBlock
    {
        $codeblock = new CodeBlock($language);
        $this->append($codeblock);

        return $codeblock;
    }

    public function panel(string $type): Panel
    {
        $panel = new Panel($type);
        $this->append($panel);

        return $panel;
    }
}
