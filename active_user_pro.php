<?php
require_once('lib/app.php');
$id = $_GET['id'];

$query = "UPDATE `lostnfound`.`profiles` SET `status` = '0' WHERE `id` = $id";
$result = mysqli_query($link, $query);
/*
echo '<pre>';
print_r($result);
echo '<pre>';
die();
 * 
 */

if($result){
    header('location: block_user.php');
}