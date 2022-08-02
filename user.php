<?php
include 'connect.php';
if (isset($_POST['SUBMIT'])) {
  $name = $_POST['NAME'];
  $email = $_POST['EMAIL'];
  $mobile = $_POST['MOBILE'];
  $password = $_POST['PASSWORD'];
  $sql = "insert into 'CRUD'(NAME, EMAIL, MOBILE, PASSWORD)
  values('$name', '$email', '$mobile', '$password')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo 'Data Updated Successfully';
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
        <input type="text" class="form-control" placeholder="Enter Your Name" name="NAME" autocomplete="off"></input>
      </div>
      <div class="mb-3">
        <label>EMAIL</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" autocomplete="off"></input>
      </div>
      <div class="mb-3">
        <label>MOBILE</label>
        <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="MOBILE" autocomplete="off"></input>
      </div>
      <div class="mb-3">
        <label>PASSWORD</label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name="PASSWORD" autocomplete="off"></input>
      </div>
      <button type="submit" class="btn btn-primary" name="SUBMIT">Submit</button>
    </form>
  </div>
</body>

</html>