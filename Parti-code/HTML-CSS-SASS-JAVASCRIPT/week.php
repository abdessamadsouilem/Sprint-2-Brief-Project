<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select * from lundi");
$rep = mysqli_query($connect,$req);
$row = mysqli_fetch_array($rep);

$req1 = ("select * from mardi");
$rep1 = mysqli_query($connect,$req1);
$row1 = mysqli_fetch_array($rep1);

$req2 = ("select * from mercredi");
$rep2 = mysqli_query($connect,$req2);
$row2 = mysqli_fetch_array($rep2);

$req3 = ("select * from jeudi");
$rep3 = mysqli_query($connect,$req3);
$row3 = mysqli_fetch_array($rep3);

$req4 = ("select * from vendredi");
$rep4 = mysqli_query($connect,$req4);
$row4 = mysqli_fetch_array($rep4);

$req5 = ("select * from samedi");
$rep5 = mysqli_query($connect,$req5);
$row5 = mysqli_fetch_array($rep5);

$req6 = ("select * from dimanche");
$rep6 = mysqli_query($connect,$req6);
$row6 = mysqli_fetch_array($rep6);


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
    <style>
  <?php include "CSS/main.css" ?>
</style>
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
     <div class="elbahja_nav--avatar">
       <img src="image/profile.png" alt="">
            <a href=#><?php echo"welcome ".$_SESSION['name'] ?></a>
         </div>
     <div class="elbahja_nav--deconecter">
            <a href="Sedeconecter.php">Se Deconecter</a>
         </div>
</nav> 
<section class="elbahja_side">
    <div class="elbahja_side-bar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="dashbordhome.php">Home</a></li>
            <li><a href="dashbord.php">Product</a></li>
            <li><a href="dashborduser.php">Users</a></li>
            <li><a href="week.php">Menu of the Week</a></li>
            <li><a href="#">Orders</a></li>
            
        </ul> 
       
    </div>


<div class="elbahja_dashbord-week">

<div class="card">
    <h3>Monday</h3>
    <br>
<p>Entré : <?php echo $row["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatelundi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Tuesday</h3>
    <br>
<p>Entré : <?php echo $row1["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row1["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row1["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatemardi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Wednesday</h3>
    <br>
<p>Entré : <?php echo $row2["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row2["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row2["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatemercredi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Thursday</h3>
    <br>
<p>Entré : <?php echo $row3["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row3["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row3["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatejeudi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Friday</h3>
    <br>
<p>Entré : <?php echo $row4["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row4["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row4["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatevendredi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Saturday</h3>
    <br>
<p>Entré : <?php echo $row5["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row5["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row5["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatesamedi.php'">Update</button>
</div>
 

<div class="card">
    <h3>Sunday</h3>
    <br>
<p>Entré : <?php echo $row6["entré"];?></p>
<br>
<p>Plat principal : <?php echo $row6["platprincipal"];?></p>
<br>
<p>Dessert : <?php echo $row6["Dessert"];?></p> 
<button class="btn1"  onclick="document.location='updatedimanche.php'">Update</button>
</div>
 
</div>
</section>
</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>
