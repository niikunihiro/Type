<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Decimal extends BaseType
{
    public function __construct($value)
    {
        if (!is_float($value)) {
            throw new InvalidTypeException((string)$value, 'float');
        }

        $this->value = $value;
    }
}
