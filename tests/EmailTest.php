<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * @test
     */
    public function emailGiveEmailReturnEmail()
    {
        $expected = 'sample-account@example.com';
        $actual = (new Email($expected))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function emailGiveStringThrowsException()
    {
        $expected = 'sample-account[at]example.com';
        $actual = (new Email($expected))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function emailGiveIntegerThrowsException()
    {
        new Email(123);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function emailGiveFloatThrowsException()
    {
        new Email(123.123);
    }
}
