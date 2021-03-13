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
        <li><a href="Home.html">HOME</a></li>
        <li><a href="Menu.html">MENU</a></li>
        <li><a href="reservation.html">RESERVATION</a></li>
        <li><a href="#">ABOUT US</a></li>
     </ul>
     
   </nav> 
<section class="elbahja_login">
   
   <form action="procces.php" method="POST">
    <label>Name : </label>
    <input type="text" id="name" name="name"/>
    <br>
    <label>Password : </label>
    <input type="password" id="pass" name="pass"/>
     <br>
    <input type="submit" id="btn" value="login"/>
   </form>
</section>

</body>
</html>