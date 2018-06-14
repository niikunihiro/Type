<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Decimal extends BaseType
{
    public function __construct($value)
    {
        $float = filter_var($value, FILTER_VALIDATE_FLOAT);
        if (!$float) {
            throw new InvalidTypeException((string)$value, 'float');
        }

        $this->value = $float;
    }
}
