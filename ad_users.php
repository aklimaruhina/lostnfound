<?php 
$user_dashboard =1;
require_once('lib/app.php');
require_once 'links.php'; 
require_once 'header.php'; 
require_once 'ad_menu.php';

	
?>


</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>All Users <small>Details</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			
					
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">All Users </span>
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
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_6">
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 User Image
								</th>
								<th>
									First Name
								</th>
								<th class="">
									 Last Name
								</th>
								<th class="">
									Mobile Number
								</th>
								<th class="">
									 Address
								</th>
								<th class="">
									 Zip-Code
								</th>
								<th class="">
									 City
								</th>
								<th class="">
									 District
								</th>
								<th class="">
									 Status
								</th>
								<th class="">
									 Created in
								</th>
								<th class="">
									 Created By
								</th>
								<th class="">
									 Modified in
								</th>
								<th class="">
									 Modified By
								</th>
								<th class="">
									 Actions
								</th>
							</tr>
							</thead>
							<tbody>

<?php
 $data =  array();
$query = "SELECT * FROM profiles";
	$result = mysqli_query($link, $query);


 	while ($row = mysqli_fetch_assoc($result) ) {
 		$data[]= $row ;
	}
 if (count($data) > 0) {
 	foreach ($data as $user) {

		


?>
							<tr>
								<td>
									 <?php echo $user['id']; ?>
								</td>
								<td>
									 <img src="<?php echo $user['profile_picture']; ?>" height="100px" width="80px">
								</td>
								<td>
									  <?php echo $user['first_name']; ?>
								</td>
								<td>
									 <?php echo $user['last_name']; ?>
								</td>
								<td>
									 <?php echo $user['mobile_number']; ?>
								</td>
								<td>
									  <?php echo $user['address']; ?>
								</td>
								<td>
									 <?php echo $user['zip_code']; ?>
								</td>
								<td>
									  <?php echo $user['city']; ?>
								</td>
								<td>
									  <?php echo $user['district']; ?>
								</td><td>
									  <?php echo $user['status']; ?>
								</td>
								<td>
									 <?php echo $user['created']; ?>
								</td>
								<td>
									  <?php echo $user['created_by']; ?>
								</td>
								<td>
									  <?php echo $user['modified']; ?>
								</td>
								<td>
									  <?php echo $user['modified_by']; ?>
								</td>
								<td>
									<a href="" onclick="block();"><span class="label label-sm label-danger" id="textChange" ><i class="fa fa-ban"></i></span> </a>
									<a href="ad_delete_user.php?id=<?php echo $user['user_id']?>"> <span class="label label-sm label-danger"><i class="fa fa-times"></i></span> </a>
								</td>
								
								
							</tr>
<?php
 	}
 }
 else

 {
 	 ?>   <h4>No user found!!</h4>
 <?php

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

<script type="text/javascript">
	function block(){

	var elem= document.getElementById('textChange');
    if(elem.value== 'Block')
    {
    	return elem.value.innerHTML = 'Unblock';
    }
    else
    {
     return elem.value.innerHTML = 'Block';
    }
}

</script>

</body>
<!-- END BODY -->
</html>