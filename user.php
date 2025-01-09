<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `crudtask` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:display.php');
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control"placeholder="Enter your name" name="name"  autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control"placeholder="Enter your email" name="email" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Mobile</label>
        <input type="text" class="form-control"placeholder="Enter your mobile" name = "mobile" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="text" class="form-control"placeholder="Enter your password" name="password" autocomplete="off">
      </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
  </body>
</html>