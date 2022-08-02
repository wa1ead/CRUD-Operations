<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM 'CRUD' WHERE ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        #echo 'Deleted Successful';
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
