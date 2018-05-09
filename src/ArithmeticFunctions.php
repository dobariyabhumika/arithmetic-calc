<?php
/**
 * This file is part of the arithmetic library.
 *
 * @author bhumika <bhumika@improwised.com>
 */
namespace Calc\Arithmetic;

class ArithmeticFunctions
{
    /**
     * Computes the greatest common divisor.
     *
     * Uses the Euclidean algorithm.
     *
     * @param int $a
     * @param int $b
     *
     * @return int the greatest common divisor
     */
    public static function gcd($a, $b) {
        return abs($b) ? self::gcd($b, $a % $b) : abs($a);
    }

    public static function gcdm($args) {
        if(sizeof($args) == 2){
            return self::gcd($args[0], $args[1]);
        } else {
            $arg0 = $args[0];
            array_shift($args);
            return self::gcd($arg0, self::gcdm($args));
        }
    }

    /**
     * Computes the least common multiple.
     *
     * It uses reduction by the greatest common divisor.
     *
     * @param int $a
     * @param int $b
     *
     * @return int the least common multiple
     */
    public static function lcm($a, $b) {
        return (abs($a * $b) / self::gcd($a, $b));
    }

    public static function lcmm($args) {
        // Recursively iterate through pairs of arguments
        // i.e. lcm(args[0], lcm(args[1], lcm(args[2], args[3])))

        if(sizeof($args) == 2){
            return self::lcm($args[0], $args[1]);
        } else {
            $arg0 = $args[0];
            array_shift($args);
            return self::lcm($arg0, self::lcmm($args));
        }
    }

    public static function avegare($args) {
        return sizeof($args) > 0 ? round( array_sum($args) / count($args), 2) : 0;
    }

    public static function factors($num) {
        $factor = array();
        $total_divisors = 0;
        for($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $factor[] = $i;
                $total_divisors++;
            }
        }
        $factor[] = $num;
        return $factor;
    }

    // prime factors decomposer
    public static function primeFactors($num) {
        $factors = self::factors($num);
        $primefactors = array();

        foreach ($factors as $value) {
            $isPrimeFactors = self::factors($value);
            if(sizeof($isPrimeFactors) == 2 && $value != 1 && $value != $num) {
                $primefactors[] = $value;
            }
        }

        return $primefactors;
    }

    public static function weightedAvegare($args) {
        $dividend = 0;
        $divisor = 0;

        foreach($args as $weight => $value){
            $dividend = $dividend + (abs($weight) * abs($value));
            $divisor = $divisor + $weight;
        }

        $average = $dividend / $divisor;

        return round($average, 2);
    }
}
