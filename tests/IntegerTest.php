<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    /**
     * @test
     */
    function integerGiveIntegerReturnInteger()
    {
        $expected = 123;
        $actual = (new Integer($expected))->getValue();
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    function integerGiveZeroReturnInteger()
    {
        $expected = 0;
        $actual = (new Integer($expected))->getValue();
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    function integerGiveMinusReturnInteger()
    {
        $expected = -10;
        $actual = (new Integer($expected))->getValue();
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    function integerGiveStringThrowException()
    {
        new Integer('this is string value');
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    function integerGiveFloatThrowException()
    {
        new Integer(1234.12);
    }
}
