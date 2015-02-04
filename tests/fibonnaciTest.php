<?php

require_once '../fibonacci.php';

class FibonacciTest extends PHPUnit_Framework_TestCase {

    // TODO: mock the Fibonacci object
    
    protected $fib;

    public function setUp() 
    {
        $this->fib = new Fibonacci(10);
    }

    public function testPrep() 
    {
        $case = $this->fib->prep(10);

        $this->assertInternalType("int", $case);
    }

    public function testFibonacciTen() 
    {
        $first10 = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55);

        $this->assertEquals($first10, $this->fib->numbers);
    }

    public function testGenerateOutputIsString() 
    {
        $case = $this->fib->generate_output();
        $this->assertContains("Execution time", $case);
    }
}