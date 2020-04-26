<?php

abstract class Basedata{
   private static $db_server="localhost";
   private static $db_user="root";
   private static $db_pass="";
   private static $db_name="gym";
   private $conn;





   public function __construct(){
      $this-> conn= new mysqli(self::$db_server,self::$db_user,self::$db_pass,self::$db_name);
   }

   protected function simpleQuery($sql){
     return $this -> conn -> query($sql);
   }

   public function __destruct(){
   	$this-> conn -> close();
   }

}
