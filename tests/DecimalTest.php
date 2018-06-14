<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    /**
     * @test
     */
    public function decimalGiveFloatReturnFloat()
    {
        $expected = 122.345;
        $actual = (new Decimal($expected))->getValue();

        $this->assertSame($expected, $actual);
    }
    /**
     * @test
     */
    public function decimalGiveStringFloatReturnFloat()
    {
        $expected = 122.345;
        $actual = (new Decimal('122.345'))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function decimalGiveIntegerReturnFloat()
    {
        $expected = 1234.0;
        $actual = (new Decimal(1234))->getValue();

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function decimalGiveStringThrowException()
    {
        new Decimal('this is string value');
    }
}
