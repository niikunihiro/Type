<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class DateTime extends BaseType
{
    public function __construct($value)
    {
        if ($value !== date('Y-m-d H:i:s', strtotime($value))) {
            throw new InvalidTypeException((string)$value, 'datetime');
        }

        $this->value = $value;
    }
}
