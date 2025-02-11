<link rel="stylesheet" href="styles.css">
<?php
include "dbconnection.php";

$sql = "SELECT * from todolist";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    ?>
    <table>
        <tr>
            <td style="text-decoration: <?php echo ($row['Status'] == 'completed') ? 'line-through' : 'none'; ?>;">
                    <?php echo $row['Task']; ?>
                </td>
                <td>
                    <?php if ($row['Status'] == 'pending') { ?>
                        <a href="completed.php?Task=<?php echo $row['Task']; ?>" style="color:green;">Completed</a>
                    <?php } ?>
            <td ><a style="color:red" href="delete.php?Task=<?php echo $row['Task']; ?>">Delete</a> </td>
        </tr>
    </table>
    <?php
}
