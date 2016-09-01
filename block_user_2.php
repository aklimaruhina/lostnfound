<?php 
require_once('lib/app.php');
require_once 'links.php'; 
 require_once 'header.php'; 

 require_once 'ad_menu.php';
 

$query = "SELECT * FROM `profiles` ";
$result = mysqli_query($link, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
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
			<div class="row">
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
							<thead>
							<tr>
								<th>
									 User Name
								</th>
								<th>
									 Email
								</th>
								
								
								<th class="">
									 Block Status
								</th>
							</tr>
							</thead>
							<tbody>
                                                            <?php
                                                                    foreach ($data as $item) {
                                                                ?>
							<tr>
								<td>
									 <?php echo $item['first_name']." ".$item['last_name'];?>
								</td>
								<td>
									 <?php echo $item['email'];?>
								</td>
								
								<?php if ($item['status']== 1){ ?>
									<td>
                                                                            <span class="label label-xm label-success"><a style="text-decoration: none; color: white" href="active_user_pro.php?id=<?php echo $item['id'];?>"> Active</a> </span>
									</td>
                                                                        <?php }  else { ?>
                                                                        <td>
                                                                            <span class="label label-xm label-danger"><a style="text-decoration: none; color: white" href="block_user_pro.php?id=<?php echo $item['id'];?>"> Blocked</a> </span>
                                                                        </td>
								</tr>
                                                                    <?php } } ?>
								
								
							</tr>
							
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