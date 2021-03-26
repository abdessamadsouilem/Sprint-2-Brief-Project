<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");



if(isset($_POST['update'])){
    if(!empty($_POST['entré']) && !empty($_POST['platprincipal']) && !empty($_POST['Dessert']) ){
    $entré= $_POST['entré'];
    $platprincipal= $_POST['platprincipal'];
    $Dessert=$_POST["Dessert"];
	
        $query="UPDATE `samedi` SET `entré` = '$entré', `platprincipal` = '$platprincipal', `Dessert` = '$Dessert'";
        $run = mysqli_query($connect,$query) or die("failed");
         if($run){
            header('location: week.php');
         }else{
             echo"error";
         }
    }else{
        echo"all fields required";
    }


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
</nav> 
<style>
  <?php include "CSS/main.css" ?>
</style>
<h1>Update Your Information For Saturday</h1>
<div class="update_form">
    <form action="updatesamedi.php" method="POST" enctype="multipart/form-data">
    <label for="Num">Entré :</label>
    <input type="Name" id="Num" name="entré" />
    <br>
    <label for="Name">Plat principal :</label>
    <input type="Name" id="Name" name="platprincipal" />
    <br>
    <label for="Name">Dessert :</label>
    <input type="Name" id="Price" name="Dessert" />
    <br>
    <input type="submit" id="btn" name="update" value="update">
</form>
</div>

</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>