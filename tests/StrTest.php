<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    /**
     * @test
     */
    function strGiveStringReturnStringValue()
    {
        $Str = new Str('this is string');
        $this->assertTrue(is_string($Str->getValue()));
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    function strGiveIntegerThrowException()
    {
        new Str(1234);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    function strGiveFloatThrowException()
    {
        new Str(1234.012);
    }
}
