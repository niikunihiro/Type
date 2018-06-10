<?php
namespace Nielsen\Type\Exception;

class InvalidTypeException extends \InvalidArgumentException
{
    public function __construct(string $value, string $type)
    {
        $this->message = sprintf('渡された値 [%1$s] の型は %2$s ではありません。', $value, $type);
    }
}
