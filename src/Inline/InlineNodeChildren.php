<?php

namespace Jmsfwk\Adf\Inline;

trait InlineNodeChildren
{
    abstract protected function append($node);

    public function emoji(string $shortName, string $id = null, string $fallback = null): self
    {
        $emoji = new Emoji($shortName, $id, $fallback);
        $this->append($emoji);

        return $this;
    }

    public function mention(string $mentionId, string $text, string $accessLevel = null): self
    {
        $mention = new Mention($mentionId, $text, $accessLevel);
        $this->append($mention);

        return $this;
    }
}
