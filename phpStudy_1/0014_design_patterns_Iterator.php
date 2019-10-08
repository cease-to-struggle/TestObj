<?php 
//Iterator 模式-->   迭代器模式
/**
 * 示例程序:将书放置到书架
 *
 * Aggregate集合的接口
 * Iterator 遍历集合的接口
 * Book  表示书的类
 * BoolShelf 表示书架的类
 * BookShelfIterator 遍历书架的类
 * Main 测试程序行为的类(调用程序)
 */
interface Aggregate{
	public function iterator();
}

interface Iterators{
	public function hasNext();
	public function next();
}

class Book{
	private $name;
	public function __construct(String $name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
}

class BookShelf implements Aggregate{
	private $books = [];
	private $last = 0;
	public function __construct(int $max){
		$book = range(1, $max);
		$this->books = $book;
	}

	public function getBookAt(int $index){
		return $this->books[$index];
	}

	public function appendBook(Book $book){
		$last = $this->last;
		$this->books[$last] = $book;
		$last++;
		$this->last = $last;		
	}

	public function getLength(){
		return $this->last;
	}

	public function iterator(){
		return new BookShelfIterator($this);
	}
}

class BookShelfIterator implements Iterators{
	private $bookShelf;
	private $index;
	public function __construct(BookShelf $bookShelf){
		$this->bookShelf = $bookShelf;
		$this->index = 0;
	}

	public function hasNext(){
		if(($this->index)<($this->bookShelf->getLength())){
			return true;
		}else{
			return false;
		}
	}

	public function next(){
		$index = $this->index;
		$book = $this->bookShelf->getBookAt($index);
		$index++;
		$this->index= $index;
		return $book;
	}
}

class Main{
	public static function test(){
		$bookShelf = new BookShelf(4);
		$bookShelf->appendBook(new Book("Around the World in 80 Days"));
		$bookShelf->appendBook(new Book("Bible"));
		$bookShelf->appendBook(new Book("Cinderella"));
		$bookShelf->appendBook(new Book("Daddy-Long-Legs"));
		$it = $bookShelf->iterator();
		while($it->hasNext()){
			$book = $it->next();
			echo $book->getName(),'<br />';
		}

	}
}

Main::test();

/**
 * Iterator（迭代器） 负责定义诸葛遍历元素的接口   Iterator 接口  
 * ConcreteIterator(具体的迭代器)  BookShelfIterator 类  角色包含遍历集合所必须的信息（BookShelf实例）
 * Aggregate（集合）负责定义创建Iterator角色的接口
 * ConcreteAggregate（具体的集合）负责实现Aggregate的接口  BookShelf类
 * 
 */
//遍历不再依赖bookShelf 的实现，不管bookShelf怎么变化  只要能够正确返回对应实例(hasNext和next方法都能正常工作)就可以实现遍历，方便了BookShelf的维护调整
//设计模式作用就是帮助我们编写可复用的类，当一个组件发生变化后，不需要对其它组件进行修改或是只需要很小的修改就可以应对
//



