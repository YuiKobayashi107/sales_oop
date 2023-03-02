<?php

include "../classes/user.php";

$user_obj = new User;

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_obj->createUser($first_name, $last_name, $username, $password);
}elseif(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user_obj->login($username, $password);
}


?>