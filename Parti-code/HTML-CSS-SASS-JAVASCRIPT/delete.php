<?php
$connect=mysqli_connect("localhost","root","","el-bahja-food")or die ("connection failed");




;
if(isset($_GET['Num']))
         {  $Num=$_GET['Num'];
             $query = " delete from food where Num ='$Num'";
             $result = mysqli_query($connect,$query);
             if($result)
             {
                header('location: dashbord.php');
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
            echo"failed";
         }
?>