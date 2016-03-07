<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	public function testTwo(){
		$this->assertEquals(1,2);
	}
	public function testThree(){
		$this->assertEquals(2,2);
	}
}

?>
