<?php
require_once('lib/app.php');

$id = $_GET['id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST['email'];
$mobile_number= $_POST['mobile_number'];

$address = $_POST['address'];
$city = $_POST['city'];
$zip_code= $_POST['zip_code'];
$district= $_POST['district'];
$status= $_POST['status'];

$old_photo = $_POST['old_photo'];

//EKHANE NORMALLLY FILE UPLOAD KORLE UPDATE HOCCeE.   condition dite hobe.
// apni jodi file name same rakhen, tobe name t

//uniqid die disi.. etai ki name hishebe save hocche?

// ota file save korche, kintu kono extension dichche na,
// ekhane ektu vul hoy


$photo_tmp = $_FILES['photo']['tmp_name'];
$photo_name = $_FILES['photo']['name'];
if(!isset($photo_name) || empty($photo_name))
{
	
	$photo_path = $old_photo;
}
else
{

	//$photo_tmp = $_FILES['photo']['tmp_name'];
	$photo_id = uniqid();
	$photo_type = $_FILES['photo']['type'];
	$photo_path = 'photo/'.$photo_id.".jpg";
	if(move_uploaded_file($photo_tmp, $photo_path))
	{
		if(file_exists($old_photo))
			{
				unlink($old_photo);
			}
	}

}
//echo $photo_path; //run koren
//$set_item="";

//  if(!empty($set_item)){$set_item .=", ";}
//  $photo_path ="photo/'.$photo_id";



$query = "UPDATE users,profiles SET first_name ='$first_name',last_name ='$last_name',`users`.email = '$email',`profiles`.email = '$email', mobile_number = '$mobile_number',address= '$address', city = '$city', zip_code = '$zip_code', district = '$district', status = '$status', `users`.modified = now(),`profiles`.modified = now(), profile_picture = '$photo_path' WHERE `profiles`.`user_id` = '$id' AND `users`.`id` = '$id';";

$success = mysqli_query($link,$query);

if($success){
	header("location:user_dashboard.php?id=".$id);
 	echo '<script type="text/javascript">'
   , 'alert( "Successfully Updated");'
   , '</script>';
   

 }else{
 	echo '<script type="text/javascript">'
   , 'alert( "Update Failed");'
   , '</script>';
   header("location:user_dashboard.php?id=".$id);

 }








?>