<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Boolean extends BaseType
{
    public function __construct($value)
    {
        $bool = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        if ($bool === null) {
            throw new InvalidTypeException((string)$value, 'boolean');
        }

        $this->value = in_array($bool, [true, 1, '1', 'on', 'yes'], true);
    }
}
