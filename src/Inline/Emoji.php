<?php

namespace Jmsfwk\Adf\Inline;

class Emoji extends InlineNode
{
    protected $type = 'emoji';
    /** @var string */
    private $shortName;
    /** @var string */
    private $code;
    /** @var string */
    private $fallback;

    public function __construct(string $shortName, string $id = null, string $fallback = null)
    {
        $this->shortName = $shortName;
        $this->code = $id;
        $this->fallback = $fallback;
    }

    protected function attrs(): array
    {
        $attrs = parent::attrs();
        $attrs['shortName'] = sprintf(':%s:', $this->shortName);
        if (null !== $this->code) {
            $attrs['code'] = $this->code;
        }
        if (null !== $this->fallback) {
            $attrs['fallback'] = $this->fallback;
        }

        return $attrs;
    }
}
