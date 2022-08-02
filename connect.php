<?php
$con = new mysqli('localhost', 'root', '', 'CRUD Operations');
if ($con) {
    echo "Connection Successful";
} else {
    die(mysqli_error($con));
}
