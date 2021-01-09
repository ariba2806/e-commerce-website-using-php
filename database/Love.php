<?php

class Love{
   
    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con))return null;
        $this->db=$db;
    }

    //insert into cart table
    public function insertIntoLove($params=null,$table="love"){
       if($this->db->con !=null) {
           if($params!=null){
               $columns=implode(',',array_keys($params));
               $values=implode(',',array_values($params));


               //create sql query
               $query_string=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
         //execute query
         $result=$this->db->con->query($query_string);
         return $result;
           }
       }
    }

    //to get user and item id and insert into cart table
    public function addToLove($userid,$itemid){
        if(isset($userid) && isset($itemid)){
            $params=array(
                "user_id" => $userid,
                "item_id" => $itemid
            );
           
            //insert data into cart
            $result=$this->insertIntoLove($params);
            if($result){
                //reload page
                header("Location: ".$_SERVER['PHP_SELF']);
            }
        }
    }

    //delete cart item using cartitem id
    public function deleteLove($item_id=null,$table='love'){
        if($item_id != null){
        $result= $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
        if($result) {
            header("Location:".$_SERVER['PHP_SELF']);

        }
        return $result;
        }
    }

    //get item id of shopping cart items
    public function getLoveId($loveArray=null,$key="item_id"){
        if($loveArray !=null ){
            $list_id=array_map(function($value) use($key){
                return $value[$key];
            },$loveArray);
            return $list_id;
        }
    }



}