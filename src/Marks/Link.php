<?php

namespace Jmsfwk\Adf\Marks;

class Link extends Mark
{
    protected $type = 'link';
    /** @var string */
    private $href;
    /** @var string|null */
    private $title;

    public function __construct(string $href, string $title = null)
    {
        $this->href = $href;
        $this->title = $title;
    }

    protected function attrs(): array
    {
        $attrs = [
            'href' => $this->href,
        ];

        if (null !== $this->title) {
            $attrs['title'] = $this->title;
        }

        return $attrs;
    }
}
