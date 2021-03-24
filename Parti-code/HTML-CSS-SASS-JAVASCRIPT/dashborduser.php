<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select name,email,Role from users");
$rep = mysqli_query($connect,$req);
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
            <li><a href="#">Orders</a></li>
            
        </ul> 
       
    </div>
    <div class="table">
    <h2>Your Users :</h2>
    
<table >
      <tr>
      <th>name</th>
      <th>email</th>
      <th> Role</th>
      <th>Delete</th>
      </tr>
<?php
     while($row = mysqli_fetch_array($rep))
     {
?>
    <tr>
       <td><?php echo $row["name"];   ?></td>
       <td><?php echo $row["email"];   ?></td>
       <td><?php echo $row["Role"];   ?></td>
       
       <td><a class="delete" >delete</a></td>
       
     </tr>

 <?php
}

?>


</table>  
<h6>*(1 mean the user is an admin)</h6>
<h6>*(0 mean the user is not an admin all users have 0)</h6>
</div>  

</section>
</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>
