<?php 
/**
 * 父类中定义处理流程的框架
 * 子类中实现具体处理
 * 
 */

/**
 * AbstractDisplay类  
 * CharDisplay类
 * StringDisplay 类
 * Main类
 * 
 */
abstract class AbstractDisplay{
	public abstract function open();
	public abstract function print();
	public abstract function close();
	public final function display(){
		$this->open();
		for($i = 0;$i<5;$i++){
			$this->print();
		}
		$this->close();
	}
}


class CharDisplay extends AbstractDisplay{
	private $ch;
	public function __construct($ch){
		$this->ch = $ch;
	}

	public function open(){
		echo htmlentities('<<');
	}

	public function print(){
		echo $this->ch;
	}

	public function close(){
		echo '>><br />' ;
	}

}


class StringDisplay extends AbstractDisplay{

	private $string;
	private $width;

	public function __construct($string){
		$this->string = $string;
		$this->width = strlen($string);
	}

	public function open(){
		$this->printLine();
	}

	public function print(){
		echo '|',$this->string,'|<br />';
	}

	public function close(){
		$this->printLine();
	}

	public function printLine(){
		echo '+';
		for($i=0;$i<$this->width;$i++){
			echo '-';
		}
		echo '+<br/>';
	}
}

class Main{
	public static function test(){
		$d1 = new CharDisplay('H');
		$d2 = new StringDisplay('Hello World.');
		$d3 = new StringDisplay('你好 世界。');
		$d1->display();
		$d2->display();
		$d3->display();
	}
}
Main::test();
