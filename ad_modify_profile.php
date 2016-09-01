<?php

require_once('lib/app.php');


$password = $_POST['password'];
$email= $_POST['email'];
echo $email;


$query = "UPDATE users SET email = '$email', password = '$password',created_by =1, modified = now(), modified_by=1 WHERE is_admin = 1;";

$success = mysqli_query($link,$query);

if($success){
	header("location:admin_dashboard.php");
 	echo '<script type="text/javascript">'
   , 'alert( "Successfully Updated");'
   , '</script>';
   

 }else{
 	echo '<script type="text/javascript">'
   , 'alert( "Update Failed");'
   , '</script>';
   header("location:ad_edit_profile.php");

 }



?>