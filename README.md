Calculator
=====================

### Powerful Modern Math Library for PHP

Calculator is the only library you need to integrate mathematical functions into your applications. It is a self-contained library in pure PHP with no external dependencies.

It is actively under development with development (0.y.z) releases.

## Prerequisites

* [Laravel 5.6](http://laravel.com/)

## Usage
```php
<?php
use Calc\Arithmetic\ArithmeticFunctions;

echo ArithmeticFunctions::lcm(3, 4); //12
echo "<br/>";
echo ArithmeticFunctions::lcmm([3, 4, 60]); //60
echo "<br/>";
echo ArithmeticFunctions::gcd(8, 12); // 4
echo "<br/>";
echo ArithmeticFunctions::gcd(8, 0); // 8
echo "<br/>";
echo ArithmeticFunctions::gcdm(array(42, 56, 28)); // 14
echo "<br/>";
echo ArithmeticFunctions::avegare(array(42, 56)); // 49
echo "<br/>";
echo ArithmeticFunctions::avegare(array(42, 56, 28)); // 42
echo "<br/>";
print_r(ArithmeticFunctions::factors(42)); // ( [0] => 1 [1] => 2 [2] => 3 [3] => 6 [4] => 7 [5] => 14 [6] => 21 [7] => 42 )
echo "<br/>";
print_r(ArithmeticFunctions::factors(2)); //  ( [0] => 1 [1] => 2 )
echo "<br/>";
print_r(ArithmeticFunctions::factors(0)); //  ( [0] => 0 )
echo "<br/>";
print_r(ArithmeticFunctions::primeFactors(42)); // ( [0] => 2 [1] => 3 [2] => 7 )
echo "<br/>";
print_r(ArithmeticFunctions::primeFactors(39)); //  ( [0] => 3 [1] => 13 )
echo "<br/>";
print_r(ArithmeticFunctions::primeFactors(0)); //  (  )
echo "<br/>";
print(ArithmeticFunctions::weightedAvegare(array(
    35 => 1000,
    15 => 2000,
    30 => 100,
    10 => 90,
    5 => 100,
    5 => 3120
))); //  889.47
echo "<br/>";
print(ArithmeticFunctions::weightedAvegare(array(
    2 => 42,
    3 => 56,
    9 => 28,
))); //  36
```

## Getting the library
```
$ composer require calc/arithmetic
```
