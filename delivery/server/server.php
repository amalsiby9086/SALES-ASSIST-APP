<?php
session_start();
?>

<?php

// initializing variables
$name = "";
$username = "";
$usn = "";
$email    = "";
$errors = array();
$reg_date = date("Y/m/d");

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'onlineshop');

if (isset($_POST['login_admin'])) {
  $admin_username = ($_POST['admin_username']);
  $password = ($_POST['password']);

  if (empty($admin_username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM `deliveryboy_info` WHERE boy_email='$admin_username' AND boy_password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
       $_SESSION['admin_email'] = $email;
      $_SESSION['admin_name'] = $admin_username;
      $_SESSION['success'] = "You are now logged in";
      header('location: ./delivery/');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


?>

