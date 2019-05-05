<?php 
	abstract class Test
	{
		public function firstTest()
		{
			echo 'this is a class';
		}
	}
	/**
	* 
	*/
	class TestChild extends Test
	{
		
	}
	$obj = new TestChild();
	$obj -> firstTest();
?>