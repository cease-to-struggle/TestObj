<?php
    class obj
      {
      	public $Tables_in_laravel = 'migrations';
      	public $Table_type = 'BASE TABLE';
      }
      $obj = new obj();
      print_r(get_object_vars($obj));
      echo "<span color = 'red'>||</span>";
      print_r(key($obj));
      echo "<span color = 'red'>||</span>";
      print_r(current($obj));
      echo "<span color = 'red'>||</span>";
      print_r(next($obj));
      echo "<span color = 'red'>||</span>";
      print_r(prev($obj));
      echo "<span color = 'red'>||</span>";
      print_r(get_object_vars($obj)[key($obj)]);