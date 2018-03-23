<?php

namespace Jmsfwk\Adf;

use Jmsfwk\Adf\Inline\Text;
use Jmsfwk\Adf\Inline\TextChildren;
use JsonSerializable;

class CodeBlock extends GroupNode implements JsonSerializable
{
    use TextChildren;
    protected $type = 'codeBlock';
    /** @var string|null */
    private $language;

    public function __construct(string $language = null, $parent = null)
    {
        parent::__construct($parent);
        $this->language = $language;
    }

    protected function attrs(): array
    {
        $attrs = parent::attrs();

        if (null !== $this->language) {
            $attrs['language'] = $this->language;
        }
        return $attrs;
    }
}
