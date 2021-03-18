
<?php

$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");



if(isset($_POST['update'])){
    if(!empty($_POST['Name']) && !empty($_POST['Price']) && !empty($_FILES['image']) ){
    $nameP= $_POST['Name'];
    $Price= $_POST['Price'];
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);
    $new_img_name= uniqid("IMG-", true).'.'.$img_ex_lc;
    $img_upload_path = 'upload/'.$new_img_name;
    move_uploaded_file($tmp_name, $img_upload_path);
        $Num=$_POST['Num'];
        $query="UPDATE `food` SET `Name` = '$nameP', `Price` = '$Price', `image` = '$new_img_name' WHERE `Num` = '$Num'";
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
