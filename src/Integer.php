<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Integer extends BaseType
{
    public function __construct($value)
    {
        $int = filter_var($value, FILTER_VALIDATE_INT);
        if (!$int) {
            throw new InvalidTypeException((string)$value, 'integer');
        }

        $this->value = $int;
    }
}
