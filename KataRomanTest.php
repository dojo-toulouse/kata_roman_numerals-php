<?php

require_once __DIR__ . '/KataRoman.php';

class KataRomanTest extends PhpUnit_Framework_TestCase {
	
	public function testConvertOne() {
		$this->assertEquals('I', KataRoman::convert(1));
	}

	public function testConvertTwo() {
		$this->assertEquals('II', KataRoman::convert(2));
	}

	public function testConvertFour() {
		$this->assertEquals('IV', KataRoman::convert(4));
	}

	public function testConvertFive() {
		$this->assertEquals('V', KataRoman::convert(5));
	}

	public function testConvertSix() {
		$this->assertEquals('VI', KataRoman::convert(6));
	}

	public function testConvertNine() {
		$this->assertEquals('IX', KataRoman::convert(9));
	}

	public function testConvertTen() {
		$this->assertEquals('X', KataRoman::convert(10));
	}

	public function testConvertEleven() {
		$this->assertEquals('XI', KataRoman::convert(11));
	}	

	public function testConvertForteen() {
		$this->assertEquals('XIV', KataRoman::convert(14));
	}

	public function testConvertForty() {
		$this->assertEquals('XL', KataRoman::convert(40));
	}

	public function testConvert1000() {
		$this->assertEquals('M', KataRoman::convert(1000));
	}

	public function testConvert50() {
		$this->assertEquals('L', KataRoman::convert(50));
	}

	public function testConvert90() {
		$this->assertEquals('XC', KataRoman::convert(90));
	}

	public function testConvert100() {
		$this->assertEquals('C', KataRoman::convert(100));
	}

	public function testConvert900() {
		$this->assertEquals('CM', KataRoman::convert(900));
	}

}