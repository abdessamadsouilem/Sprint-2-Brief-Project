
 

<?php
$name= $_POST['name'];
$password= $_POST['pass'];





$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
$name= htmlspecialchars($_POST['name']);
$password= htmlspecialchars($_POST['pass']);
$password=md5($password);


if(!empty($_POST['save'])){
    $query= "select * from users where name='$name' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['loginstatu']=true;
        header('location: dashbordw.php');
        
    }else {
        echo"login not success";
    }
}
if(!empty($_POST['save'])){
    $query= "select * from users where name='$name' and password='$password' and Role =1";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['loginstatus']=true;
        header('location: dashbordhome.php');
    }
}


?>

