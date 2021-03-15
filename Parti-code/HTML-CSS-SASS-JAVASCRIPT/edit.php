
<?php

$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");



if(isset($_POST['update'])){
    if(!empty($_POST['Name']) && !empty($_POST['Price']) && !empty($_POST['image']) ){
        $nameP= $_POST['Name'];
        $Price= $_POST['Price'];
        $image=$_POST['image'];
        $Num=$_POST['Num'];
        $query="UPDATE `food` SET `Name` = '$nameP', `Price` = '$Price', `image` = '$image' WHERE `Num` = '$Num'";
        $run = mysqli_query($connect,$query) or die("failed");
         if($run){
            header('location: dashbord.php');
         }else{
             echo"error";
         }
    }else{
        echo"all fields required";
    }


}
?>
