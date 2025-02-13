
<?php
include "dbconnection.php";
if(isset($_POST['addtask'])){
$task  = $_POST['task'];
if($task == ''){
    $error_message = "<div class='error-message'>Nothing to Add</div>";
}   
 else{
$sql = "INSERT INTO todolist(Task)
          values('$task')";
$qry = mysqli_query($conn,$sql);
    
if($qry){
    echo "<meta http-equiv='refresh' content='0'>";
}
else{
    echo "faield to insert".mysqli_error($conn);
}
}}
?>
<link rel="stylesheet" href="styles.css">
<style>
    .error-message {
    color: red;
    font-weight: bold;
    margin-top: 10px;
    background: #ffecec;
    padding: 10px;
    border: 1px solid red;
    border-radius: 5px;
}
</style>
<div class="container">
    <div class="todo">
        <form action="#" method="POST">
            <h2>To-Do List</h2>
            <input class="search" type="text" name="task" placeholder="Enter a task">
            <input class="btn-task" type="submit" name="addtask" value="Add Task">
            <?php echo $error_message; ?>
            <?php include "list.php"; ?>
        </form>
    </div>
</div>

