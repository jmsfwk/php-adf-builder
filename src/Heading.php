<?php

namespace Jmsfwk\Adf;

use Jmsfwk\Adf\Inline\Text;
use Jmsfwk\Adf\Inline\TextChildren;
use JsonSerializable;

class Heading extends GroupNode implements JsonSerializable
{
    use GroupNodeChildren, TextChildren;
    protected $type = 'heading';
    /** @var int */
    private $level;

    public function __construct(int $language, $parent = null)
    {
        parent::__construct($parent);
        $this->level = $language;
    }

    protected function attrs(): array
    {
        $attrs = parent::attrs();

        $attrs['level'] = $this->level;

        return $attrs;
    }
}
