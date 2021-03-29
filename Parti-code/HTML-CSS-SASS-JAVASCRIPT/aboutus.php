<?php
session_start();
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
           <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
        <?php if (isset($_SESSION["loginstatus"]) && $_SESSION["loginstatus"]  === true) : ?>
          <div class="elbahja_nav--dahbord">
            <a href="dashbord.php">dashbord</a>
         </div>
         <div class="elbahja_nav--deconecter">
            <a href="Sedeconecter.php">Se Deconecter</a>
         </div>
      <?php else : ?>
         <div class="elbahja_nav--Login">
            <a href="login.php">LOGIN</a>
         </div>
      <?php endif; ?>
    </nav> 
<br>
<style>
  <?php include "CSS/main.css" ?>
</style>
<section class="elbahja_presentation">
<h1>Our Story</h1>
<div class="presentation">
    <img src="image/606211768ab15.jpg" alt="">

    <p class="tupe">
    welcome
    </p>
</div>

<img name="slide" src="image/" alt="">
</section>


<script type="text/javascript" src="about.js"></script>
<script src="slide.js"></script>
</body>
</html>
