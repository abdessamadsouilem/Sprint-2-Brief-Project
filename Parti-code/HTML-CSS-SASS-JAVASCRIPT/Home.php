<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select * from lundi");
$rep = mysqli_query($connect,$req);
$row = mysqli_fetch_array($rep);
$req4 = ("select * from vendredi");
$rep4 = mysqli_query($connect,$req4);
$row4 = mysqli_fetch_array($rep4);
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
   <style>
      <?php include "CSS/main.css" ?>
   </style>
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
   <br>
   <section class="elbahja_Welcome">
      <div class="elbahja_Welcome-para">
         <p class="elbahja_Welcome-para--welcome">WELCOMR TO EL BAHJA FOOD</p>
         <br>
         <p class="elbahja_Welcome-para--tradition">LOVES TRADICTIONELLES FOOD</p>
      </div>
      <div class="elbahja_Welcome-button">
         <div class="elbahja_Welcome-button--order"><a href="Menu.html">Order Food</a></div>
         <div class="elbahja_Welcome-button--book"><a href="reservation.html">Book a Table</a></div>
      </div>

   </section>
   <section class="elbahja_bestDishes">

      <div class="elbahja_bestDishes-slider">
         <h1>
            Best Dishes
         </h1>
         <div class="elbahja_bestDishes-slider--images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">
            <input type="radio" name="slide" id="img5">

            <img src="image/couscous.jpg" alt="" class="m1" width="1440px">
            <img src="image/deser.jpg" alt="" class="m2">
            <img src="image/tajine.jpg" alt="" class="m3">
            <img src="image/poul.jpg" alt="" class="m4">
            <img src="image/tanjia.jpg" alt="" class="m5">

         </div>
         <div class="elbahja_bestDishes-slider--dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
            <label for="img5"></label>
         </div>
      </div>
      <div class="elbahja_bestDishes-historyabout">
         <h3>El Bahja Food</h3>
         <h4>"El Bahja Food One Of The best restaurant in Marrakech"</h4>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Ad enim similique molestiae ea ipsa eveniet omnis, deleniti
            sed possimus repellendus optio cumque nobis quae harum dolores dolor.
            Animi, consequuntur possimus?</p>
         <a href="#">More About Our Restaurant ></a>

      </div>

      </div>
      <?php error_reporting(0);
      ini_set('display_errors', 0); ?>
   </section>
   <h2 class="title">Menu Of The Week</h2>
   <section class="elbahja_Menu">
      <div class="elbahja_Menu-gridcontainer">
         <div class="elbahja_Menu-gridcontainer--lundi">

            <div class="front">
               <p>Monday</p>
            </div>
            <div class="back">
               <p>Entré : <?php echo $row["entré"];?></p>
               <br>
               <p>Plat principal : <?php echo $row["platprincipal"];?></p>
               <br>
               <p>Dessert : <?php echo $row["Dessert"];?></p>
            </div>
         </div>
         <div class="elbahja_Menu-gridcontainer--mardi">
            <div class="front">
               <p>Tuesday</p>
            </div>
            <div class="back">
            <p>Entré : </p>
               <br>
               <p>Plat principal : </p>
               <br>
               <p>Dessert : </p>
            </div>
         </div>
         <div class="elbahja_Menu-gridcontainer--mercredi">
            <div class="front">
               <p>Wednesday </p>
            </div>
            <div class="back">
            <p>Entré : </p>
               <br>
               <p>Plat principal : </p>
               <br>
               <p>Dessert : </p>
            </div>
         </div>
         <div class="elbahja_Menu-gridcontainer--jeudi">

            <div class="front">
               <p>Thursday</p>
            </div>
            <div class="back">
            <p>Entré : </p>
               <br>
               <p>Plat principal : </p>
               <br>
               <p>Dessert : </p>
            </div>
         </div>
         <div class="elbahja_Menu-gridcontainer--vendredi">
            <div class="front">
               <p>Friday</p>
            </div>
            <div class="back">
            <p>Entré : <?php echo $row4["entré"];?> </p>
               <br>
               <p>Plat principal : <?php echo $row4["platprincipal"];?> </p>
               <br>
               <p>Dessert : <?php echo $row4["Dessert"];?></p>
            </div>

         </div>
         <div class="elbahja_Menu-gridcontainer--samedi">

            <div class="front">
               <p>Saturday</p>
            </div>
            <div class="back">
            <p>Entré : </p>
               <br>
               <p>Plat principal : </p>
               <br>
               <p>Dessert : </p>
            </div>
         </div>
         <div class="elbahja_Menu-gridcontainer--dimanche">
            <div class="front">
               <p>Sunday</p>
            </div>
            <div class="back">
            <p>Entré : </p>
               <br>
               <p>Plat principal : </p>
               <br>
               <p>Dessert : </p>
            </div>
         </div>
      </div>
   </section>
   <h2 class="title">Delicious Deals For Delicious Meals</h2>
   <section class="elbahja_bestDeals">
      <div class="elbahja_bestDeals-couscous">
         <div class="elbahja_bestDeals-couscous--image">
            <img src="image/6047793e4d86f.jpg" alt="">
         </div>
         <div class="elbahja_bestDeals-couscous--text">
            <h3>Order Couscous Marocaine
               Now.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur suscipit dolorem saepe soluta cupiditate consectetur, magnam a ut reprehenderit dignissimos!</p>
            <div class="button"> <a href="#">Order Now</a></div>
         </div>
      </div>
      <div class="elbahja_bestDeals-taginepoulet">
         <div class="elbahja_bestDeals-taginepoulet--image">
            <img src="image/6048b38cd7672.jpg" alt="">
         </div>
         <div class="elbahja_bestDeals-taginepoulet--text">
            <h3>Order Tagine Poulet
               Marocaine Now.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, soluta! Odit velit hic, voluptatem praesentium aspernatur molestiae eius provident qui?</p>
            <div class="button"> <a href="#">Order Now</a></div>
         </div>
      </div>
      <div class="elbahja_bestDeals-ma9lapoulet">
         <div class="elbahja_bestDeals-ma9lapoulet--image">
            <img src="image/60477ae08e276.jpg" alt="">
         </div>
         <div class="elbahja_bestDeals-taginepoulet--text">
            <h3>Order Ma9la Poulet
               Marocaine Now.</h3>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis sit itaque repellat tempora architecto eveniet modi laboriosam cupiditate, totam ipsa repudiandae id voluptatem tenetur quod sed. Non vel hic nemo!</p>
            <div class="button"> <a href="#">Order Now</a></div>

         </div>
      </div>
   </section>
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