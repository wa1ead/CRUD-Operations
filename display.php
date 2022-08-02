<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" <title>CRUD Operations
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5s"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NUM</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">OPERATIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM 'CRUD'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $name = $row['NAME'];
                        $email = $row['EMAIL'];
                        $mobile = $row['MOBILE'];
                        $password = $row['PASSWORD'];
                        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $password . '</td>
        <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
    </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>