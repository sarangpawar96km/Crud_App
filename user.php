<?php
include "connect.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $sql = "insert into crud (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud-Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" required name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" required name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile No</label>
                <input type="number" class="form-control" required name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" required name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>