<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select * from food");
$rep = mysqli_query($connect,$req);
$upload_dir = 'upload/';
function total_num_users(){
    $connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
    $sql = "SELECT * FROM users where Role=0";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
    return $count; 
  }
  function total_num_food(){
    $connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
    $sql = "SELECT * FROM food ";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
    return $count; 
  } 
  function total_num_admin(){
    $connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
    $sql = "SELECT * FROM users where Role=1";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
    return $count; 
  } 
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
        <li><a href="contactus.php">CONTACT US</a></li>
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


<div class="elbahja_card">
<div class="totaluserscard">
         
         <img src="image/profile.png" alt="">
         <p>Total Users : <?php
    echo total_num_users();
    ?></p>
         
</div>

<div class="totaluserscard">
         
         <img src="image/food.png" alt="">
         <p>Total Food : <?php
    echo total_num_food();
    ?></p>
         
</div>

<div class="totaluserscard">
         
         <img src="image/profile.png" alt="">
         <p>Total Admin : <?php
    echo total_num_admin();
    ?></p>
         
</div>
<div class="totaluserscard">
         
         <img src="image/choices (1).png" alt="">
         <p>Total Orders : 
    </p>
         
</div>
    

</div>
</section>
</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>
