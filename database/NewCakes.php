<?php

//fetch product data
class NewCakes{
  public $db=null;

  public function __construct(DBController $db){
    if(!isset($db->con))return null;
    $this->db=$db;
  }

  //fetch product from mysql
  public function getData($table='newcakes'){
     $result= $this->db->con->query("SELECT * FROM {$table}");
  $resultArray=array();
  //fetch product data one by one
  while($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $resultArray[]=$item;
  }

  return $resultArray;
    }
    //get product using item id
    public function getProduct($item_id=null,$table='newcakes'){
      if(isset($item_id)){
      $result=$this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

        //fetch product data one by one
  while($item= mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $resultArray[]=$item;
  }

  return $resultArray;
      }
    }
}