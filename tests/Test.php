<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
        $c = new Calc;

        $test = $c->add(1)->add(1);

		$this->assertEquals($test->is(),2);
  	}
}
