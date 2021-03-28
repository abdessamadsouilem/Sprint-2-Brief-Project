<?php
session_start();


if(!empty($_POST['Full-Name']) && !empty($_POST['email']) && !empty($_POST['object']) && !empty($_POST['message'])  ){

    if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)  && !preg_match('/[0-9]+/', $_POST["Full-Name"])){
        $name=$_POST["Full-Name"];
        $email=$_POST["email"];
        $object=$_POST["object"];
        $message=$_POST["message"];
        $to="abdessamadsouilem1@gmail.com";
        $messagesubject="new message from contact us page \r\n";
        
        $body="";
        
        $body .="From : ".$name. "\r\n";
        $body .="Email : ".$email. "\r\n";
        $body .="object : ".$object. "\r\n";
        $body .="message : \r\n".$message. "\r\n";
        $headers=$email;
        $mailsent= mail($to,$messagesubject,$body,$headers);
        if($mailsent == true){
            echo "<script>alert('message sending successfully')</script>";
        
        }else{
         echo "<script>alert('Sorry but the message not send')</script>";
        }
    }else{
      echo "<script>alert('please all field are required')</script>";
     }

}else{
   
  }

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
   <h1>Contact us</h1>
<section class="elbahja_contactus">
   <div class="background"></div>
   <div class="elbahja_form">
      <br>
      <h2>We’d love to hear from you</h2>
      <p class="paragraf">Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions</p>
      <form action="contactus.php" method="POST">
   <div class="form-control ">
   <label for="Name">Full-Name :</label>
   <input type="text" placeholder="Abdessamad Souilem" id="Name" name="Full-Name"  />
   </div>
   <br>
   <div class="form-control ">
   <label for="Name">Email :</label>
   <input type="email" placeholder="abdessamadsouilem1@gmail.com" id="email" name="email" />
   </div>
   <br>
   <div class="form-control ">
   <label for="Name">Object :</label>
   <input type="text" placeholder="Your Object" id="object" name="object"  />
   </div>
   
   <div class="form-control ">
   <p for="Name">Your Message :</p>
   <textarea type="text" rows="9" cols="50" placeholder="Enter Your Message Here" id="message" name="message"  ></textarea>
   <button  value="contact"  id="submit" name="send">send</button>
   </form>
   </div>
   </div>
</section>



</body>
</html>