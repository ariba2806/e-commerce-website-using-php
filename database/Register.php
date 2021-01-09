<?php
class Register{
  public $db=null;

  public function __construct(DBController $db){
    if(!isset($db->con))return null;
    $this->db=$db;
  }

  
  
}