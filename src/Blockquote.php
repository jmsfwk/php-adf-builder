<?php

namespace Jmsfwk\Adf;

use JsonSerializable;

class Blockquote extends GroupNode implements JsonSerializable
{
    use GroupNodeChildren;

    protected $type = 'blockquote';
}
