<?php

?>



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
        <li><a href="#">CONTACT US</a></li>
     </ul>
     
   </nav> 
   
<section class="elbahja_login">
<h1>Login</h1>

   <form action="procces.php" method="POST">
    <label>Name : </label>
    <input type="text" id="name" name="name"/>
    <br>
    <label>Password : </label>
    <input type="password" id="pass" name="pass"/>
     <br>
    <input type="submit" id="btn" name="save" value="login">
   </form>
</section>

</body>
</html>