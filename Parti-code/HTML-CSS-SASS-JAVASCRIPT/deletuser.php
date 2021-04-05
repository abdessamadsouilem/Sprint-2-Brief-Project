
<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");
if(isset($_GET['id']))
         {  $id=$_GET['id'];
             $query = " delete from users where id ='$id'";
             $result = mysqli_query($connect,$query);
             if($result)
             {
                header('location: dashborduser.php');
             }
             else
             {
                 echo ' error ';
             }
        }
         else
         {
            echo"failed";
         }
?>