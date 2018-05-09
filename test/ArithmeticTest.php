<?php
/**
 * This file is part of the arithmetic library.
 *
 * @author bhumika <bhumika@improwised.com>
 */
namespace Calc\Arithmetic;

class ArithmeticTest extends \PHPUnit\Framework\TestCase
{
    public function testGCD()
    {
        $this->assertEquals(21, ArithmeticFunctions::gcd(1071, 462));
        $this->assertEquals(21, ArithmeticFunctions::gcd(-1071, -462));
    }

    public function testLCM()
    {
        $this->assertEquals(12, ArithmeticFunctions::lcm(3, 4));
    }
}
