<?php

class CalcTest extends PHPUnit_Framework_TestCase
{
	public function test_add()
    {
        $calc = new Calc;
        $test = $calc->add(1)->add(1)->is();
		$this->assertEquals($test, 22);
  	}
}
