
 

<?php
session_start();

$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$name= $_GET['name'];
$password= $_GET['pass'];

$_SESSION["newsession"]=$name;
if(!empty($_GET['save'])){
    $query= "select * from admin where name='$name' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        // echo"login success Welcome ".$name;
        $_SESSION["newsession"]=$name;
        header('location: dashbord.php');
    }else{
        echo"login not success";
    }
}


?>

