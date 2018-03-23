<?php

namespace Jmsfwk\Adf;

use JsonSerializable;

abstract class Adf implements JsonSerializable
{
    /** @var string */
    protected $type;

    public function toJson(): string
    {
        return json_encode($this);
    }

    public function jsonSerialize()
    {
        $result = [
            'type' => $this->type,
        ];

        if ($attrs = $this->attrs()) {
            $result['attrs'] = $attrs;
        }

        return $result;
    }

    protected function attrs(): array
    {
        return [];
    }
}
