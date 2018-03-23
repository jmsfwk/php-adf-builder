<?php

namespace Jmsfwk\Adf;

class Panel extends GroupNode
{
    const INFO = 'info';
    const NOTE = 'note';
    const WARNING = 'warning';
    const SUCCESS = 'success';
    const ERROR = 'error';
    use GroupNodeChildren;
    protected $type = 'panel';
    /** @var string */
    private $panelType;

    public function __construct(string $type = self::INFO, $parent = null)
    {
        parent::__construct($parent);
        $this->panelType = $type;
    }

    protected function attrs(): array
    {
        $attrs = parent::attrs();
        $attrs['panelType'] = $this->panelType;

        return $attrs;
    }
}
