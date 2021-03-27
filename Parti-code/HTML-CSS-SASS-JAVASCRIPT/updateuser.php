<?php

session_start();
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$query1="select id from users";
$rep = mysqli_query($connect,$query1);



if(isset($_POST['update'])){
    if(!empty($_POST['id']) ){
    $id= $_POST['id'];
    $Role= $_POST['Role'];
	
    $query="UPDATE `users` SET `Role` = '$Role' WHERE `id` = '$id'";
    $run = mysqli_query($connect,$query) or die("failed");
    if($run){
            header('location: dashborduser.php');
    }else{
             echo"error";
         }
    }else{
        echo"all fields required";
    }


}

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
<h1>Update Your Information</h1>
<div class="update_form">
    <form action="updateuser.php" method="POST" enctype="multipart/form-data">
    <label for="id">Id Of Users You Want Update :</label>
    <!-- <input type="Name" id="Num" name="id" /> -->
    <select name="id" id="">
    <?php
     while($row = mysqli_fetch_array($rep))
     {
?>
     <option value="<?php echo($row["id"]) ?>"><?php echo($row["id"])  ?></option>
     <?php
}

?>
    </select>
    <br>
    <label for="Name">Role Of User :</label>
    <input type="Name" id="Name" name="Role" />
    <br>
    
    <input type="submit" id="btn" name="update" value="update">
</form>
</div>

</body>
</html>
<?php else : ?>
<?php  header('location: login.php'); ?>
<?php endif; ?>
