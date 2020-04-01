<?php
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase {

	public function setup(): void
	{
		$this->Factorial = new Factorial();
	}

	public function teardown(): void
	{
	}
	public function test_fac_result_below_0(){
		$this->assertTrue($this->Factorial->cal_fac(-1) == NULL);
	}
	public function test_fac_result_is_float(){
		$this->assertTrue($this->Factorial->cal_fac(1.5) == NULL);
	}
	public function test_fac_result_equals_0(){
		$this->assertTrue($this->Factorial->cal_fac(0) == NULL);
	}
	public function test_fac_result_equals_1(){
		$this->assertTrue($this->Factorial->cal_fac(1) == 1);
	}
	public function test_fac_result_equals_value(){
		$this->assertTrue($this->Factorial->cal_fac(5) == 120);
	}
	public function test_fac_result_equals_another_value(){
		$this->assertTrue($this->Factorial->cal_fac(10) == 3628800);
	}
}