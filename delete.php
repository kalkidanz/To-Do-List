<?php
include "dbconnection.php";
$task = $_GET['Task'];
$sql = "DELETE  FROM todolist WHERE Task = '$task'";
$qry = mysqli_query($conn,$sql);
header("location:To-Do-List.php");

