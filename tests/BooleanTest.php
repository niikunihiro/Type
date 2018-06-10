<?php
namespace Nielsen\Type;

use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    /**
     * @test
     */
    public function booleanGiveTrueReturnTrue()
    {
        $actual = (new Boolean(true))->getValue();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function booleanGive1ReturnTrue()
    {
        $actual = (new Boolean(1))->getValue();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function booleanGiveString1ReturnTrue()
    {
        $actual = (new Boolean('1'))->getValue();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function booleanGiveOnReturnTrue()
    {
        $actual = (new Boolean('on'))->getValue();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function booleanGiveYesReturnTrue()
    {
        $actual = (new Boolean('yes'))->getValue();

        $this->assertTrue($actual);
    }
    /**
     * @test
     */
    public function booleanGiveFalseReturnFalse()
    {
        $actual = (new Boolean(false))->getValue();

        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function booleanGive0ReturnFalse()
    {
        $actual = (new Boolean(0))->getValue();

        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function booleanGiveString0ReturnFalse()
    {
        $actual = (new Boolean('0'))->getValue();

        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function booleanGiveOffReturnFalse()
    {
        $actual = (new Boolean('off'))->getValue();

        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function booleanGiveNoReturnFalse()
    {
        $actual = (new Boolean('no'))->getValue();

        $this->assertFalse($actual);
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function booleanGiveStringThrowException()
    {
        new Boolean('this is string value');
    }

    /**
     * @test
     * @expectedException \Nielsen\Type\Exception\InvalidTypeException
     */
    public function booleanGive3ThrowException()
    {
        new Boolean(3);
    }
}
