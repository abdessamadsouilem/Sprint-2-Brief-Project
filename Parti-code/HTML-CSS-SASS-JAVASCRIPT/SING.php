<?php

$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");

$name= htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$password= htmlspecialchars($_POST['pass']);
$errors = array();

if(!empty($_POST['save'])){
    $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($connect, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { 
        if ($user['name'] === $name) {
          array_push( $errors, "name already exists");
          echo"name already have";
          header('location: signup.php');
        }
    
        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
          echo"email already have";
          header('location: signup.php');
        }
      }

      if (count($errors) == 0) {
        $password = md5($password);
  
        $query = "INSERT INTO users (name, email, password) 
                  VALUES('$name', '$email', '$password')";
        mysqli_query($connect, $query);
        $_SESSION['name'] = $name;
        
        header('location: home.php');
    }
  }
else{
    echo "error";
}
















?>