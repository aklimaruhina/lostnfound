<html>
<head>
	<title>Add Data</title>
</head>
 
<body>
<?php
include_once("config.php");
 
if(isset($_POST['Submit'])) {	
	$item_name = $_POST['item_name'];
	$weight = $_POST['weight'];
	$item_descript = $_POST['item_descript'];
        $item_color = $_POST['item_color'];
        $product_code = $_POST['product_code'];
		
	
	if(empty($item_name) || empty($weight) || empty($item_descript)|| empty($item_color) || empty($product_code)) {
				
		if(empty($item_name)) {
			echo "<font color='red'>Item_Name field is empty.</font><br/>";
		}
		
		if(empty($weight)) {
			echo "<font color='red'>Weight field is empty.</font><br/>";
		}
		
		if(empty($item_descript)) {
			echo "<font color='red'>Item_description  field is empty.</font><br/>";
		}
                
                if(empty($item_color)) {
			echo "<font color='red'>Item_color  field is empty.</font><br/>";
		}
                
                if(empty($product_code)) {
			echo "<font color='red'>product_code  field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		 
			
			
		$result = mysql_query("INSERT INTO products(item_name,weight,item_descript,item_color,product_code) VALUES('$item_name','$weight','$item_descript','$item_color','$product_code')");
		
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>