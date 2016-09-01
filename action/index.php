<?php
include_once("config.php");
 
$result = mysql_query("SELECT * FROM products ORDER BY id DESC");
?>
 
<html>
<head>	
	<title>Homepage</title>
</head>
 
<body>
<a href="add.html">Add New Data</a><br/><br/>
 
	<table width='80%' border=0>
 
	<tr bgcolor='#CCCCCC'>
		<td>Item_Name</td>
                <td>Weight</td>
		<td>Item_description</td>
                <td>Item_color</td>
                <td>Product_code</td>
		<td>Update</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['item_name']."</td>";
		echo "<td>".$res['weight']."</td>";
		echo "<td>".$res['item_descript']."</td>";
                echo "<td>".$res['item_color']."</td>";
                echo "<td>".$res['product_code']."</td>";
                
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>