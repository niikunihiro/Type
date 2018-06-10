<?php
namespace Nielsen\Type;

use Nielsen\Type\Exception\InvalidTypeException;

class Date extends BaseType
{
    public function __construct($value)
    {
        $value = str_replace('/', '-', $value);
        $ymd = explode('-', $value);
        if (count($ymd) !== 3) {
            throw new InvalidTypeException((string)$value, 'date');
        }

        list($year, $month, $day) = $ymd;
        if (!checkdate($month, $day, $year)) {
            throw new InvalidTypeException((string)$value, 'date');
        }

        $this->value = (new \DateTime($value))->format('Y-m-d');
    }
}
