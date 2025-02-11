<?php
$servername = "localhost";
$username = "root";
$userpassword = "";
$dbname = "To-Do-List-login";

$conn = mysqli_connect($servername,$username,$userpassword,$dbname);

if(!$conn){
    die("failed to connect".mysqli_connect_error());
}