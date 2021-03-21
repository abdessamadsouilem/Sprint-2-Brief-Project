<?php

if(!empty($_POST['Full-Name']) && !empty($_POST['email']) && !empty($_POST['Date']) && !empty($_POST['number'])  ){

    if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) && $_POST["number"]<20 && !preg_match('/[0-9]+/', $_POST["Full-Name"])){
        $name=$_POST["Full-Name"];
        $email=$_POST["email"];
        $date=$_POST["Date"];
        $number=$_POST["number"];
        $to="abdessamadsouilem1@gmail.com";
        $messagesubject="new reservation \r\n";
        
        $body="";
        
        $body .="From ".$name. "\r\n";
        $body .="Email ".$email. "\r\n";
        $body .="Date of reservation ".$date. "\r\n";
        $body .="number of person with me ".$number. "\r\n";
        $headers=$email;
        $mailsent= mail($to,$messagesubject,$body,$headers);
        if($mailsent == true){
            header('location: reservation.php');
        
        }else{
            header('location: reservation.php');
        }
    }

}else{
    $invalid_class_name="invalid";
}
?>