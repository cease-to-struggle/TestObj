<?php 
/**
 * 父类决定实例生成方式，但不决定所要生成的具体的类
 * 实例生成交给子类负责
 */

/**
 * factory method
 *
 * Product类  产品  定义实例中所持有的接口   框架
 * Factory 类  创建者  生成产品角色的规则    框架
 * 
 * IDCard  具体产品                        加工
 * IDCardFactory 具体产品创建类            加工
 * Main   调用测试
 */

abstract class Product{
	public abstract function use(); 
}

abstract class Factory{
	public final function create($owner){
		$p = $this->createProduct($owner);
		$this->registerProduct($p);
		return $p;
	}

	protected abstract function createProduct($owner);
	protected abstract function registerProduct($product);
}


class IDCard extends Product{
	private $owner;
	public function __construct($owner){
		echo '制作',$owner,'的ID卡<br />';
		$this->owner = $owner;
	}

	public function use(){
		echo '使用',$this->owner,'的ID卡<br />';
	}

	public function getOwner(){
		return $this->owner;
	}
}

class IDCardFactory extends Factory{
	private $owners=[];
	protected function createProduct($owner){
		return new IDCard($owner);
	}

	protected function registerProduct($product){
		$this->owners[]=$product->getOwner();
	}

	public function getOwners(){
		return $this->owners;
	}
}


class Main{
	public static function test(){
		$factory = new IDCardFactory();
		$card1 = $factory->create('小明');
		$card2 = $factory->create('小红');
		$card3 = $factory->create('小刚');
		$card1->use();
		$card2->use();
		$card3->use();
		var_dump($factory->getOwners());
	}
}

Main::test();
