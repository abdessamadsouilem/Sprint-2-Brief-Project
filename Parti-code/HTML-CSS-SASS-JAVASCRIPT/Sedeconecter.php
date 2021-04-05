<?php
session_start();
unset($_SESSION['name'],$_SESSION['loginstatus']);
header("location:Home.php")
?>
