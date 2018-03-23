<?php

namespace Jmsfwk\Adf;

use JsonSerializable;

class Document extends GroupNode implements JsonSerializable
{
    use GroupNodeChildren;
    protected $type = 'doc';
    private $version = 1;

    public function jsonSerialize()
    {
        $result = parent::jsonSerialize();
        $result['version'] = $this->version;

        return $result;
    }
}
