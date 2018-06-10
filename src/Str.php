<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Str extends BaseType
{
    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new InvalidTypeException((string)$value, 'string');
        }

        $this->value = $value;
    }
}
