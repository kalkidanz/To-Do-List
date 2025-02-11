<?php
include "dbconnection.php";
if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user where userName = '$username' && password1 = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "login successfull";
    }
    else{
        echo "invalid username or password";
       include "login.php";
    }
}