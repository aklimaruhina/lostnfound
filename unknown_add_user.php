<?php
require_once('lib/app.php');

//intialize data variables
$id= $_GET['id'];
$email = '';

$mobile_number= '';

$message= '';

if(isset($_POST['email']))
	$email = $_POST['email'];

if(isset($_POST['mobile_number']))
	$mobile_number = $_POST['mobile_number'];


if(isset($_POST['message']))
{
	$message = $_POST['message'];
}
else{ $message = "I have found your product. Contact me ASAP.";}



$query1 = "INSERT INTO un_user(email, mobile_number, message, user_id, sent_at) 
			values('".$email."','".$mobile_number."','".$message."','".$id."',  NOW())";
$success = mysqli_query($link,$query1);

 if($success){
 	$_SESSION['msg_success'] = "Message Sent!! The owner will contact with you. Thank you for visiting us.";
 }else{
 	$_SESSION['msg_error'] = "Failed to send message. Enter your code again.";
 }
 header('location: index.php');
