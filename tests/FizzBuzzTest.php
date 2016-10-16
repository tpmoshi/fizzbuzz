<?php

use \Hello\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	function setup(){

		$this->number = new FizzBuzz();
	}

	function testNumberMot3() {
		
		$exect = 'Fizz';
		$actual = $this->number->getNumber(3);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot9() {
		
		$exect = 'Fizz';
		$actual = $this->number->getNumber(9);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot5() {
		
		$exect = 'Buzz';
		$actual = $this->number->getNumber(5);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot25() {
		
		$exect = 'Buzz';
		$actual = $this->number->getNumber(25);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot30() {
		
		$exect = 'FizzBuzz';
		$actual = $this->number->getNumber(30);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot60() {
		
		$exect = 'FizzBuzz';
		$actual = $this->number->getNumber(60);
		$this->assertEquals($exect, $actual);
	}

	function testNumberMot7() {
		
		$exect = 7;
		$actual = $this->number->getNumber(7);
		$this->assertEquals($exect, $actual);
	}
}
?>
