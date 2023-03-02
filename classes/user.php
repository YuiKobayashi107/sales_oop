<?php
require "database.php";

class User extends Database {

    public function createUser($first_name, $last_name, $username, $password){
       
        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`)VALUES('$first_name','$last_name','$username','$password')";
        if($this->conn->query($sql)){
            echo $sql;
            header('location: ../views');
            exit;
        }else{
            die('Error creating user:'.$this->conn->error);
        }
    }

    public function login($username, $password){
        $sql = "SELECT * FROM `users` WHERE `username`='$username'";

        if($result = $this->conn->query($sql)){
            if($result->num_rows ==1){
                $user_details = $result->fetch_assoc();
                
                if(password_verify($password, $user_details['password'])){
                    session_start();
                    $_SESSION['id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];

                    header('location: ../views/dashboard.php');
                    exit;
                }else{
                    die('incorrect password');
                }
            }else{
                die('Username not found');
            }
        }else{
            die('Error Loggin in' .$this->conn->error);
        }
    }




}
?>