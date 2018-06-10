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
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function decimalGiveIntegerThrowException()
    {
        new Decimal(1234);
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
