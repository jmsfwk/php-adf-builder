<?php

namespace Jmsfwk\Adf\Inline;

class Mention extends InlineNode
{
    protected $type = 'mention';
    /** @var string */
    private $mentionId;
    /** @var string */
    private $text;
    /** @var string|null */
    private $accessLevel;

    public function __construct(string $mentionId, string $text, string $accessLevel = null)
    {
        $this->mentionId = $mentionId;
        $this->text = $text;
        $this->accessLevel = $accessLevel;
    }

    protected function attrs(): array
    {
        $attrs = parent::attrs();
        $attrs['id'] = $this->mentionId;
        $attrs['text'] = $this->text;

        if (null !== $this->accessLevel) {
            $attrs['access_level'] = $this->accessLevel;
        }

        return $attrs;
    }
}
