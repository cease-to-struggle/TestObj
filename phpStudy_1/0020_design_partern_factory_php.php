<?php 
/*abstract class Creator{
	protected abstract function factoryMethod();
	public function startFactory(){
		$mfg = $this->factoryMethod();
		return $mfg;
	}
}

class TextFactory extends Creator{
	protected function factoryMethod(){
		$product = new TextProduct();
		return $product->getProperties();
	}
}

class GraphicFactory extends Creator{
	protected function factoryMethod(){
		$product = new GraphicProduct();
		return $product -> getProperties();
	}
}


interface Product{
	public function getProperties();
}

class TextProduct implements Product{
	private $mfgProduct;

	public function getProperties(){
		$this->mfgProduct = "This is text.";
		return $this->mfgProduct;
	}
}

class GraphicProduct implements Product{
	private $mfgProduct;

	public function getProperties(){
		$this->mfgProduct = 'This is a graphic.<3';
		return $this->mfgProduct;
	}
}

class Client{
	private $someGraphicObject;
	private $someTextObject;

	public function __construct(){
		$this->someGraphicObject = new GraphicFactory();
		echo $this->someGraphicObject->startFactory(),'<br />';
		$this->someTextObject = new TextFactory();
		echo $this->someTextObject->startFactory(),'<br />';
	}
}

$worker = new Client();*/


abstract class Creator{
	protected abstract function factoryMethod(Product $product);

	public function doFactory($productNow){
		$countryProduct = $productNow;
		$mfg = $this->factoryMethod($countryProduct);
		return $mfg;
	}
}

class CountryFactory extends Creator{
	private $cuntry;
	protected function factoryMethod(Product $product){
		$this->country = $product;
		return $this->country->getProperties();
	}
}

interface Product{
	public function getProperties();
}

class KyrgzstanProduct implements Product{
	private $mfgProduct;

	public function getProperties(){
		$this->mfgProduct = "This is text.";
		return $this->mfgProduct;
	}
}

class Client{
	private $countryFactory;

	public function __construct(){
		$this->countryFactory = new CountryFactory();
		echo $this->countryFactory->doFactory(new KyrgzstanProduct());
	}
}


$worker = new Client();

