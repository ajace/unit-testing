<?php

require_once '../fibonacci.php';

class FibonacciTest extends PHPUnit_Framework_TestCase {
    public function testFibonacciTen() {
        $first10 = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55);
        $fib = new Fibonacci(10);
        // var_dump($fib->numbers);
        // $actual = $fib->calculate();
        $this->assertEquals($first10, $fib->numbers);
    }    
}