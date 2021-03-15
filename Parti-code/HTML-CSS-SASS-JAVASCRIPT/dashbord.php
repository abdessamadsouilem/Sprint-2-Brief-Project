<?php


$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$req = ("select * from food");
$rep = mysqli_query($connect,$req);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
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
        <li><a href="#">ABOUT US</a></li>
     </ul>
</nav> 
<?php
// echo"Welcome Back".
?>
<h1>Your Dashboard</h1>
<div class="elbahja_dashbord">
    
<form action="add.php" method="POST">
    <label for="Num">Number Of Products :</label>
    <input type="Name" id="Num" name="Num" />
    <br>
    <label for="Name">Name Of Products :</label>
    <input type="Name" id="Name" name="Name" />
    <br>
    <label for="Name">Price Of Products :</label>
    <input type="Name" id="Price" name="Price"/>
    <br>
    <label for="img">Select image:</label>
    <input type="file" id="image" name="image" />
    <input type="submit" id="btn" name="save" value="Add Food">
</form>
<br>
<table >
      <tr>
      <th>Num</th>
      <th>Name</th>
      <th> Price</th>
      <th> image</th>
      <th>update</th>
      <th>Delete</th>
      
      </tr>
<?php
     while($row = mysqli_fetch_array($rep))
     {
?>
    <tr>
       <td><?php echo $row["Num"];   ?></td>
       <td><?php echo $row["Name"];   ?></td>
       <td><?php echo $row["Price"];   ?></td>
       <td><?php echo '<img src=' . $row["image"] . '">'   ?></td>
       <td><a href="update.php">update</a></td>
       <td><a href="">delete</a></td>
       
     </tr>

 <?php
}

?>
</div>
</body>
</html>