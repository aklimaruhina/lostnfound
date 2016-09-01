<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$item_name=$_POST['item_name'];
	$weight=$_POST['weight'];
	$item_descript=$_POST['item_descript'];
        $item_color = $_POST['item_color'];
        $product_code = $_POST['product_code'];
	
	
	if(empty($item_name) || empty($weight) || empty($item_descript)|| empty($item_color) || empty($product_code)) {	
			
		if(empty($item_name)) {
			echo "<font color='red'>item_name field is empty.</font><br/>";
		}
		
		if(empty($weight)) {
			echo "<font color='red'>weight field is empty.</font><br/>";
		}
		
		if(empty($item_descript)) {
			echo "<font color='red'>item_descript field is empty.</font><br/>";
		}	
                if(empty($item_color)) {
			echo "<font color='red'>Item_color  field is empty.</font><br/>";
		}
                
                if(empty($product_code)) {
			echo "<font color='red'>product_code  field is empty.</font><br/>";
		}
	} else {	
		
		$result = mysql_query("UPDATE products SET item_name='$item_name',weight='$weight',item_descript='$item_descript',item_color='$item_color',product_code='$product_code' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];
 

$result = mysql_query("SELECT * FROM products WHERE id=$id");
 
while($res = mysql_fetch_array($result))
{
	$item_name = $res['item_name'];
	$weight = $res['weight'];
	$item_descript = $res['item_descript'];
        $item_color = $res['item_color'];
        $product_code = $res['product_code'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>item_name</td>
				<td><input type="text" name="item_name" value=<?php echo $item_name;?>></td>
			</tr>
			<tr> 
				<td>weight</td>
				<td><input type="text" name="weight" value=<?php echo $weight;?>></td>
			</tr>
                        
                        <tr> 
				<td>item_descript</td>
				<td><input type="text" name="item_descript" value=<?php echo $item_descript;?>></td>
			</tr>
			<tr> 
				<td>item_color</td>
				<td><input type="text" name="item_color" value=<?php echo $item_color;?>></td>
			</tr>
                        
                        <tr> 
				<td>product_code</td>
				<td><input type="text" name="product_code" value=<?php echo $item_descript;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>