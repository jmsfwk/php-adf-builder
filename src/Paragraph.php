<?php

namespace Jmsfwk\Adf;

use Jmsfwk\Adf\Inline\InlineNodeChildren;
use Jmsfwk\Adf\Inline\Text;
use Jmsfwk\Adf\Inline\TextChildren;
use JsonSerializable;

class Paragraph extends GroupNode implements JsonSerializable
{
    use InlineNodeChildren, TextChildren;
    protected $type = 'paragraph';
}
