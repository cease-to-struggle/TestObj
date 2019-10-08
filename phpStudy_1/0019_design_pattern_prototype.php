<?php 
/**
 * 通过复制生成实例
 *
 * Product       框架    声明抽象方法use 和 createClone接口
 * Manager       框架    调用createClone方法复制实例的类
 * MessageBox    将字符串放入方框中并使其显示出来的类。实现了use方法和createClone方法
 * UnderlinePen  将字符串加上下划线并使其显示出来的类。实现了use方法和createClone方法
 * Main 
 * 
 */
  abstract class Product{
  	public abstract function use($str);
  	public abstract function CreateClone();
  }

  class Manager{
  	
  }
