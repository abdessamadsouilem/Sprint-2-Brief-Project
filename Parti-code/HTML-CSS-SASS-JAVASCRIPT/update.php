<?php
// $nameP= $_POST['Name'];
// $Price= $_POST['Price'];
// $image=$_POST['image'];
session_start();
?>


<?php if (isset($_SESSION["loginstatus"]) && $_SESSION["loginstatus"]  === true) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="shortcut icon" href="image/logo/Untitled-2.png" />
    <title>Elbahja Food</title>
</head>
<body>
<nav class="elbahja_nav">
     <img class="elbahja_nav--logo" src="image/logo/Untitled-2.png" alt="">
     <ul class="elbahja_nav--list">
        <li><a href="Home.php">HOME</a></li>
        <li><a href="Menu.php">MENU</a></li>
        <li><a href="reservation.php">RESERVATION</a></li>
        <li><a href="#">ABOUT US</a></li>
     </ul>
</nav> 
<style>
  <?php include "CSS/main.css" ?>
</style>
<h1>Update Your Information</h1>
<div class="update_form">
    <form action="edit.php" method="POST" enctype="multipart/form-data">
    <label for="Num">Number Of Products :</label>
    <input type="Name" id="Num" name="Num" />
    <br>
    <label for="Name">Name Of Products :</label>
    <input type="Name" id="Name" name="Name" />
    <br>
    <label for="Name">Price Of Products :</label>
    <input type="Name" id="Price" name="Price" />
    <br>
    <label for="img">Select image:</label>
    <input type="file" id="image" name="image" />
    <input type="submit" id="btn" name="update" value="update">
</form>
</div>

</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>
