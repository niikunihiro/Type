<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class DateTimeTest extends TestCase
{
    /**
     * @test
     */
    public function dateTimeGiveDateTimeReturnDateTime()
    {
        $expected = '2018-01-18 12:09:00';
        $actual = (new DateTime($expected))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function dateTimeGiveStringThrowException()
    {
        new DateTime('this is string value');
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function dateTimeGiveIntegerThrowException()
    {
        new DateTime(12345);
    }
}
