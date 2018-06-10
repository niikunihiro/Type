<?php

namespace Nielsen\Type;


use Nielsen\Type\Exception\InvalidTypeException;

class Email extends BaseType
{
    public function __construct($value)
    {
        $email = filter_var($value, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            throw new InvalidTypeException((string)$value, 'email');
        }

        $this->value = $email;
    }
}
