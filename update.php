<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM 'CRUD' WHERE ID='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['NAME'];
$email = $row['EMAIL'];
$mobile = $row['MOBILE'];
$password = $row['PASSWORD'];

if (isset($_POST['SUBMIT'])) {
    $name = $_POST['NAME'];
    $email = $_POST['EMAIL'];
    $mobile = $_POST['MOBILE'];
    $password = $_POST['PASSWORD'];
    $sql = "update 'CRUD' set ID='$id', NAME='$name', EMAIL='$email', MOBILE='$mobile', PASSWORD='$password' where ID='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 'Data Inserted Successfully';
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" <title>CRUD Operations</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>NAME</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="NAME" autocomplete="off" value=<?php echo $name; ?>></input>
            </div>
            <div class="mb-3">
                <label>EMAIL</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" autocomplete="off" value=<?php echo $email; ?>></input>
            </div>
            <div class="mb-3">
                <label>MOBILE</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="MOBILE" autocomplete="off" value=<?php echo $mobile; ?>></input>
            </div>
            <div class="mb-3">
                <label>PASSWORD</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="PASSWORD" autocomplete="off" value=<?php echo $password ?>></input>
            </div>
            <button type="submit" class="btn btn-primary" name="SUBMIT">Submit</button>
        </form>
    </div>
</body>

</html>