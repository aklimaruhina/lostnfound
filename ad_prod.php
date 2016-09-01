<?php 
$prod_dashboard =1;
require_once 'links.php'; 
require_once 'header.php'; 
require_once 'ad_menu.php';
?>

<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Product <small>Details</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row " style="color: #000">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">All Registered Products </span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">

<?php
 if(isset($_SESSION['msg_success']) AND !empty($_SESSION['msg_success'])):

?>
	<h4 style="color:green"><?php echo $_SESSION['msg_success']; unset($_SESSION['msg_success'])?></h4>
<?php 

 endif; 
if(isset($_SESSION['msg_error']) AND !empty($_SESSION['msg_error'])):
?>
	<h4 style="color:red; font-weight:bold;"><?php echo $_SESSION['msg_error']; unset($_SESSION['msg_error'])?></h4>
<?php 
endif;
 ?>
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 User Name
								</th>
								<th>
									Title
								</th>
								<th class="hidden-xs">
									 Description
								</th>
								<th class="hidden-xs">
									Image
								</th>
								<th class="">
									 Weight
								</th>
								<th class="">
									 Destination
								</th>
								<th class="">
									 Others
								</th>
								
								<th class="">
									 Actions
								</th>
							</tr>
							</thead>
							<tbody>

<?php
 $data =  array();
$query = "SELECT `products`.id, `users`.username, `products`.title, `products`.description,`products`.weight,`products`.destinaiton, `products`.others, `products`.product_picture FROM products INNER JOIN users ON `users`.id =`products`.user_id";
	$result = mysqli_query($link, $query);


 	while ($row = mysqli_fetch_assoc($result) ) {
 		$data[]= $row ;
	}
 if (count($data) > 0) {
 	foreach ($data as $prod) {



		


?>
		
							<tr>
								<td>
									 <?php echo $prod['id']; ?>
								</td>
								<td>
									 <?php echo $prod['username']; ?>
								</td>
								<td>
									 <?php echo $prod['title']; ?>
								</td>
								<td>
									 <?php echo $prod['description']; ?>
								</td>
								<td>
									 <img src="<?php echo $prod['product_picture']; ?>" height="100px" weight="80px;" >
								</td>
								
								<td>
									 <?php echo $prod['weight']; ?>
								</td>
								<td>
									<?php echo $prod['destinaiton']; ?>
								</td>
								<td>
									 <?php echo $prod['others']; ?>
								</td>
								<td>
									 <a href=""><span class="label label-sm label-danger"><i class="fa fa-ban"></i></span> </a>
									 <a href="ad_delete_prod.php?id=<?php echo $prod['id']?>"> <span class="label label-sm label-danger"><i class="fa fa-times"></i></span> </a>
								</td>
								
								
							</tr>
<?php
}
}

?>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<?php require_once 'pre_footer.php';?>
<?php require_once 'footer.php';?>
<?php require_once 'scripts.php';?>
</body>
<!-- END BODY -->
</html>