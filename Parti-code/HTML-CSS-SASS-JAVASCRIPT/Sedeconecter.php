<?php
session_start();
unset($_SESSION['name'],$_SESSION['loginstatus'],$_SESSION['loginstatu']);
header("location:Home.php")
?>
