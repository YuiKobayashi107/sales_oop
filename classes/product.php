<?php
require "database.php";

class Product extends Database {

    public function displayProducts(){
       
        $sql = "SELECT * FROM Products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving users' . $this->conn->error);
        }
    }
}
