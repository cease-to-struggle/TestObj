<?php

/**
 * singleton 单例模式
 *
 * 三私一公
 * 
 */

class Singleton{
	private static $obj;
	private function __construct(){

	}

	private function __clone(){

	}

	public static function getObj(){
		if(self::$obj){
			return self::$obj;
		}
		self::$obj = new self();
		return self::$obj;
	}
}

class TestClass{

}



class Main{
	public static function test(){
		$obj1 = Singleton::getObj();
		$obj2 = Singleton::getObj();
		$obj3 = new TestClass();
		$obj4 = new TestClass();		
		var_dump($obj1 == $obj2,$obj1===$obj2);
		var_dump($obj3 == $obj4,$obj3===$obj4);
	}

}
Main::test();