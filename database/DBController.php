<?php

class DBController{
    protected $host="localhost";
    protected $user="root";
    protected $password="ariba";
    protected $database="shopee";


    //connection prop

    public $con=null;
    //contructor
    public function __construct(){
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Failed" .$this->con->connect_error;
        }
    }
    public function __destruct(){
        $this->closeConnection();
    }

//for closing con
protected function closeConnection(){
    if($this->con != null){
        $this->con->close();
        $this->con=null;

    }
}
}



