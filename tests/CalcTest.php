<?php

class CalcTest extends PHPUnit_Framework_TestCase
{

    public function test_init()
    {
        $calc = new Calc(100);
        $test = $calc->is();
        $this->assertEquals($test, 100);
    }

	public function test_add()
    {
        $calc = new Calc;
        $test = $calc->add(1)->add(1)->is();
		$this->assertEquals($test, 2);
  	}

    public function test_subtract()
    {
        $calc = new Calc(10);
        $test = $calc->subtract(1)->subtract(1)->is();
        $this->assertEquals($test, 8);
    }

    public function test_multiply()
    {
        $calc = new Calc(5);
        $test = $calc->multiply(2)->multiply(5)->is();
        $this->assertEquals($test, 50);
    }

    public function test_divide()
    {
        $calc = new Calc(10);
        $test = $calc->divide(5)->divide(2)->is();
        $this->assertEquals($test, 1);
    }

}
