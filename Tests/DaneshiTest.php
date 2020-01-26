<?php
use PHPUnit\Framework\TestCase;

class DaneshiTest extends TestCase
{
    public function testFirstShouldBeTrue()
    {
        $user = new \App\My;
		$testArray = array(1, 2, 5, 6, 9, 5, 20);
        $result = $user->first($testArray);
        $this->assertEquals($result, true);
    }
	public function testFirstShouldBeFalse()
    {
        $user = new \App\My();
		$testArray = array(1, 2, 4, 6, 9, 5, 20);
        $result = $user->first($testArray);
        $this->assertEquals($result, false);
    }
	
	public function testSecondShouldBeIndexOfFiveAndSeven()
    {
        $user = new \App\My();
		$testArray = array(1, 2, 4, 5, 7, 9, 13, 20);
        $result = $user->second($testArray, 12);
        $this->assertEquals($result, array(3, 4));
    }
	
	public function testSecondShouldBeIndexOfFourAndFive()
    {
        $user = new \App\My();
		$testArray = array(1, 2, 4, 5, 7, 9, 13, 20);
        $result = $user->second($testArray, 9);
        $this->assertEquals($result, array(2, 3));
    }
	
	public function testSecondShouldBeFalse()
    {
        $user = new \App\My();
		$testArray = array(1, 2, 4, 5, 7, 9, 13, 20);
        $result = $user->second($testArray, 28);
        $this->assertEquals($result, false);
    }
}