<?php
include("class/users.php"); 
$login=new users;
 extract($_POST);
 $ans=$login->login($email,$pwd); 
 echo $ans;                 
 if ($ans==1) 
 {
 	header("location:quizhome.php");
 }
 else
 {
 	header("location:quize_login.php?run=failed");
 }


 ?>