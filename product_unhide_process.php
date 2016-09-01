<?php
require_once('lib/app.php');
$id = $_GET['pid'];

$query = "UPDATE `lostnfound`.`products` SET `status` = '1' WHERE `id` = $id";
$result = mysqli_query($link, $query);
/*
echo '<pre>';
print_r($result);
echo '<pre>';
die();
 * 
 */

if($result){
    header('location: view_prod.php?pid='.$id);
}