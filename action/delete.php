<?php

include("config.php");
 
$id = $_GET['id'];
 
$result = mysql_query("DELETE FROM products WHERE id=$id");
 
header("Location:index.php");