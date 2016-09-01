<?php
require_once('../lib/app.php');
$pid = $_GET['pid'];

$query = "SELECT * FROM `products` WHERE id = $pid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

$product_code = $row['product_code'];
	//echo $product_code;
 require 'pdfcrowd.php';


try
{   
    // create an API client instance
    $client = new Pdfcrowd("tanvirs2", "f54c03a5092808eb5be864c4244a8fa2");

    // convert a web page and store the generated PDF into a $pdf variable
     $pdf = $client->convertHtml("
	 
	 <head>
		<style>
			body{text-align: center;}
			h1{text-shadow: 2px 1px 3px whitesmoke; color: greenyellow}
			span{color: blue;}
		</style>
	 </head>
	 <body>
	 <h3> Unique Product Code-Page</h3>
	 <h1>Your Product Code is - <span>$product_code</span></h1>
	 
	 </body>");

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"product Unique Code.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>