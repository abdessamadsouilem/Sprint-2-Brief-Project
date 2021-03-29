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
      <div class="elbahja_Welcome-background"></div>
      <div class="elbahja_Welcome-para">
         <p class="elbahja_Welcome-para--welcome">WELCOMR TO EL BAHJA FOOD</p>
         <br>
         <p class="elbahja_Welcome-para--tradition">LOVES TRADICTIONELLES FOOD</p>
      </div>
      <div class="elbahja_Welcome-button">
         <div class="elbahja_Welcome-button--order"><a href="Menu.php">Order Food</a></div>
         <div class="elbahja_Welcome-button--book"><a href="reservation.php">Book a Table</a></div>
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
               <li><a href="aboutus.php"> About us</a></li>
               <br>
               <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
         </div>
         <div class="footer_grid-container--social-media">
              <a href="#"><?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path id="facebook" xmlns="http://www.w3.org/2000/svg" d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" fill="#ffffff" data-original="#000000" style=""/></g></svg>
</a>
              <a href="#">
             
<svg width="256px" height="256px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
    <g>
        <path id="instagram" d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#fff"></path>
    </g>
</svg>
</a>
              <a href="#"><?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path id="twiter" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z" fill="#ffffff" data-original="#000000" style=""/>

</g></svg>
</a>
         </div>
      </div>
   </footer>

</body>

</html>