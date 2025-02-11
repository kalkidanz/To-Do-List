<?php
include "dbconnection.php";
$task = $_GET['Task'];
$sql = "UPDATE todolist SET Status='Completed' WHERE Task = '$task'";
$qry = mysqli_query($conn,$sql);
header("location:To-Do-List.php");

