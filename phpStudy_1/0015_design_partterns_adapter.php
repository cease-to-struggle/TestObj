<?php 
/**
 *类适配器（使用继承的适配器）
 *对象适配器（使用委托的示例程序）
 * 
 */
/**
 *类适配器（使用继承的适配器）
 *Banner 类
 *print  接口
 *PrintBanner  接口实现
 *main 调用
 *
 */
class Banner{
	private $string;
	public function __construct(String $string){
		$this->string = $string;
	}

	public function showWithParen(){
		echo "({$this->string})";
	}

	public function showWithAster(){
		echo "*{$this->string}*";
	}
}

interface PrintType{
	public function printWeak();
	public function printStrong();
}

class PrintBanner extends Banner implements PrintType{
	public function __construct(String $string){
		parent::__construct($string);
	}

	public function printWeak(){
		$this->showWithParen();
	}

	public function printStrong(){
		$this->showWithAster();
	} 
}

class Main_1{
	public static function test(){
		$print = new PrintBanner('Hello');
		$print->printWeak();
		$print->printStrong();
	}
}


Main_1::test();


/**
 * 对象适配器（使用委托的示例程序）
 * 
 * 
 */

abstract class PrintTy{
	abstract function printWeak();
	abstract function printStrong();
}

class PrintBanner_2 extends PrintTy{
	private $banner;
	public function __construct(String $string){
		$this->banner = new Banner($string);
	}

	public function printWeak(){
		$this->banner->showWithParen();
	}
	public function printStrong(){
		$this->banner->showWithAster();
	}
}

class Main_2{
	public static function test(){
		$print = new PrintBanner_2('Hello World');
		$print->printWeak();
		$print->printStrong();
	}
}

Main_2::test();


/**
 * Target（对象）定义所需的方法  PrintType接口和PrintTy类
 * Client（请求者） 使用Target角色所定义的方法进行具体处理  Main类
 * Adaptee（被适配） 持有既定方法的角色  Banner类
 * Adater（适配器） PrintBanner类
 *
 *
 * 使用场景  比如 使用自定义类继承组件类进行重写或者封装
 */