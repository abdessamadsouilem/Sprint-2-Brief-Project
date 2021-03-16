<?php


$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
session_start();


if(isset($_POST['save'])){
    if(!empty($_POST['Num']) && !empty($_POST['Name']) && !empty($_POST['Price']) && !empty($_POST['image'])  ){
        $upload_dir = 'image/';
        $Num=$_POST['Num'];
        $nameP= $_POST['Name'];
        $Price= $_POST['Price'];
        $image=$_POST['image'];
        unlink($upload_dir.$image);
        
       
        $query="insert into food(Num,Name,Price,image) values('$Num','$nameP' , '$Price' , '$image')";
        $run = mysqli_query($connect,$query) or die("failed");
         if($run){
            header('location: dashbord.php');
         }else{
             echo"error";
             echo"<a href='dashbord.php'>click here</a>";
         }
    }else{
        echo"all fields required <br> Go back <br>";
        echo"<a href='dashbord.php'>click here</a>";
    }




}

?>