<?php


$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select * from food");
$rep = mysqli_query($connect,$req);
$upload_dir = 'image/';

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
        <div class="elbahja_nav--Login">
           <a href="login.php" >LOGIN</a>
        </div>
    </nav> 
    
    <section class="elbahja_Reserve">
        <h1>Welcome</h1>
        <h2>Try Great El bahja Dishes</h2>
        <button type="button" class="main-btn">Reservation</button>
    </section>
    <h1>DISHES</h1>
    
   <section class="elbahja_Dishes">
<?php
     while($row = mysqli_fetch_array($rep))
     {
?>
     <div class="elbahja_Dishes-card">
         <img src="<?php echo $upload_dir.$row["image"]; ?>" >
         <h2><?php echo $row["Name"];   ?></h2>
         <p>Price :<?php echo $row["Price"];   ?></p>
         <button>Order Now</button>
     </div>
     <?php
}

?>
   </section>
   <style>
  <?php include "CSS/main.css" ?>
</style>
    <footer>
        <div class="footer_grid-container">
           <div class="footer_grid-container--logo">
             <img src="image/logo/Untitled-2.png" alt="">
           </div>
           <div class="footer_grid-container--pages">
             <ul>
                <li><a href="Menu.html">Menu</a></li>
                <br>
                <li><a href="reservation.html">Reservation</a></li>
                <br>
                <li><a href="#">Orders</a></li>
             </ul>
           </div>
           <div class="footer_grid-container--about">
         <ul>
            <li><a href="#"> About us</a></li>
            <br>
            <li><a href="#">Contact us</a></li>
         </ul>
           </div>
           <div class="footer_grid-container--social-media">
  
           </div>
         </div>
     </footer>
</body>
</html>