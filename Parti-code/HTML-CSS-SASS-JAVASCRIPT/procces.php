
 

<?php
$name= $_POST['name'];
$password= $_POST['pass'];




$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$name= htmlspecialchars($_POST['name']);
$password= htmlspecialchars($_POST['pass']);


if(!empty($_POST['save'])){
    $query= "select * from admin where name='$name' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        // echo"login success Welcome ".$name;
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['loginstatus']=true;
        header('location: dashbord.php');
    }else{
        echo"login not success";
    }
}


?>

