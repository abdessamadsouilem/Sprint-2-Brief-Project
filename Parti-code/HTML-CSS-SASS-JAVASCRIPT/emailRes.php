<?php

if(isset($_POST["send"])){


$messagesubject="new reservation \r\n";
$name=$_POST["Full-Name"];
$email=$_POST["email"];
$date=$_POST["Date"];
$number=$_POST["number"];

$to="abdessamadsouilem1@gmail.com";
$body="";

$body .="From ".$name. "\r\n";
$body .="Email ".$email. "\r\n";
$body .="Date of reservation ".$date. "\r\n";
$body .="number of person with me ".$number. "\r\n";

$mailsent= mail($to,$messagesubject,$body);
if($mailsent==true){
    echo"wow";

}else{
    echo"no";
}

}



?>