<?php
require_once('lib/app.php');

$pid = $_GET['pid'];


//intialize data variables
$title = '';
$description = '';
$color = '';
$weight = '';
$destination= '';
$others= '';


//dd($user_type);

//hold full_name
if(isset($_POST['title']))
  $title = $_POST['title'];
if(isset($_POST['catagory']))
  $catagory = $_POST['catagory'];

if(isset($_POST['description']))
  $description = $_POST['description'];
//hold email
if(isset($_POST['color']))
  $color = $_POST['color'];
//hold password
if(isset($_POST['weight']))
  $weight = $_POST['weight'];

if(isset($_POST['destination']))
  $destination = $_POST['destination'];

if(isset($_POST['others']))
  $others = $_POST['others'];

if(isset($_POST['catagory']))
  $catagory = $_POST['catagory'];
$old_photo = $_POST['old_photo'];


$product_code = $_POST['product_code'];

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


$query1 = "UPDATE products SET catagory = '$catagory', title ='$title', description ='$description', product_code = '$product_code', color = 'color', weight = '$weight',destination = '$destination', others = '$others', product_picture = '$photo_path' WHERE id = ".$pid;


$success = mysqli_query($link,$query1);


if($success){
  
  echo '<script type="text/javascript">'
   , 'alert( "Successfully Updated");'
   , '</script>';
   

 }else{
  echo '<script type="text/javascript">'
   , 'alert( "Update Failed");'
   , '</script>';
    }
   header("location:view_prod.php?pid=".$pid);


