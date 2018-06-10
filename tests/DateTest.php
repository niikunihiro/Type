<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    /**
     * @test
     */
    public function dateGiveDateReturnDate()
    {
        $expected = '2018-01-10';
        $actual = (new Date($expected))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function dateGiveDateSlashDelimiterReturnDate()
    {
        $expected = '2018-01-10';
        $actual = (new Date('2018/01/10'))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function dateGiveStringThrowException()
    {
        new Date('this is string value');
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function dateGiveIntegerThrowException()
    {
        new Date(8765);
    }
}
