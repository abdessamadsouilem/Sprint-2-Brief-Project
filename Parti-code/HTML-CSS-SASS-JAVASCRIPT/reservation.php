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
           <li><a href="#">ABOUT US</a></li>
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
    <style>
  <?php include "CSS/main.css" ?>
</style>
    <section class="elbahja_Reservation">
        <h1>RESERVATIONS</h1>
        <p>Booking a table has never been so easy with free & instant online restaurant reservations, booking now!!</p>
    </section>
    <section class="elbahja_Makereser">
        <h4> Welcome to Elbahja Food</h4>
        <h1>MAKE A RESERVATION</h1>
        <h4>Open Hours</h4>
        <p>Sunday to Tuesday 09.00 - 24:00 Friday and Sunday 08:00 - 03.00</p>
        <h2>+212 694175174</h2>
    </section>
    <section class="elbahja_form">
        <form action="emailRes.php" method="POST" id="form" class="form">
            <!-- <div class="form-control "> -->
                <label for="Name">Full-Name</label>
                <input type="text" placeholder="Abdessamad Souilem" id="Name" name="Full-Name" />
                <small>Error message</small>
            <!-- </div> -->
            <!-- <div class="form-control "> -->
                <label for="Email">Email</label>
                <input type="email" placeholder="abdessamadsouilem1@gmail.com" id="email" name="email" />
                <small>Error message</small>
            <!-- </div> -->
            <!-- <div class="form-control "> -->
                <label for="Date">Date</label>
                <input type="datetime-local"  id="date" name="Date"/>
                <small>Error message</small>
            <!-- </div> -->
            <!-- <div class="form-control "> -->
                <label for="number">Number of persons width you :</label>
                <input type="number"  id="number" name="number"/>
                <small>Error message</small>
            <!-- </div> -->
            <button  onclick="submit()" value="submit contact" type="submit" name="send">MAKE RESERVATION</button>
        </form>
    </section>


    <script src="reservation.js"></script>
</body>
</html>