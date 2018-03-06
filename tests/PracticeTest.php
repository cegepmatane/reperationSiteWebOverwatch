<?php



class PracticeTest extends PHPUnit\Framework\TestCase {
	
	
	public function testHelloWorld()
	{
		$greeting = 'Hello, World.';
		
		$this->assertTrue($greeting === 'Hello, World.');
	}
	
	public function testQuizz()
	{
		$answer1 = 'A';
		
		$this->assertFalse($answer1 === 'B');
	}
	
	public function testStringEquals() 
    {
		$egal = 'Maintenance';
		
        $this->assertEquals($egal, 'Maintenance');
    } 
	
	public function testArray()
	{
		$this->assertContains('maintenance', array('web', 'jeu', 'maintenance', 'soutien'));
	}
	
	public function testKeyArray()
	{
		$this->assertArrayHasKey('maintenance', array('maintenance' => 'cours'));
	}
	
	public function testSame()
	{
		$this->assertSame('2', '2');
	}
	
	public function testfileExists()
	{	
		$this->assertFileExists('C:\wamp64\www\reparationSiteWebOverwatch');
	}
	
}

