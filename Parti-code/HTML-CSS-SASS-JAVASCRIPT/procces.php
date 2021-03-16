
 

<?php
$name= $_POST['name'];
$password= $_POST['pass'];
session_start();
$_SESSION['name']=$name;



$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$name= $_POST['name'];
$password= $_POST['pass'];

$_SESSION["newsession"]=$name;
if(!empty($_POST['save'])){
    $query= "select * from admin where name='$name' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        // echo"login success Welcome ".$name;
        
        header('location: dashbord.php');
    }else{
        echo"login not success";
    }
}


?>

