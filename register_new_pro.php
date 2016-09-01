<?php 
$register =1;
require_once('lib/app.php');
require_once 'links.php'; 
require_once 'header.php';
require_once 'menu.php'; 

$id = $_GET['id'];
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
				<h1>New Product <small>entry</small></h1>
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
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
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
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Product registration</span>
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
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="add_prod.php?id=<?php echo $id;?>" method="POST" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-body">
									
									<div class="form-group">
										<label class="control-label col-md-3">Select an image 
										</label>
										<div class="col-md-3 fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail">
												<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
											</div>	
											<div class="fileupload-preview fileupload-exists thumbnail"></div>
											<div>
												<span class="btn btn-file">
													<span class="fileupload-new">
														<button type="submit" class="btn btn-blue"><i class="fa fa-picture-o"></i> Select Image</button>
													</span>
													<span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
														<input type="file" name="photo" >
												</span>
												<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
													</a>
											</div>
										</div>
										
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Choose Catagory <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type='radio' name='catagory' id="luggage" value='luggage' checked= "checked"/>
							                    <label for="luggage">Luggage</label>
							                    <input type='radio' name='catagory' id="trolley" value='trolley'/>
							                    <label for="trolley">Trolley</label>
							                    <input type='radio' name='catagory' id="hand_bag" value='hand_bag'/>
							                    <label for="hand_bag">Hand Bag</label>
							                     <input type='radio' name='catagory' id="briefcase" value='briefcase'/>
							                    <label for="briefcase">Briefcase</label>
							                     
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Title <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="title"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Description <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="description"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Color <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="color"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Weight  <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="weight"/>
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Destination <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="destination"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Others<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="others"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Generate a Code</label>
										<div class="col-md-4">
										    <div class="input-icon right">
												<!-- <label name="product_code" id="myButton1"><h4 style="color: red; line-height:10px; text-align:left;" ><?php echo random_code();?></h4></label></br> -->
									        	<input type="text" id="myButton1" name="product_code" value="<?php echo random_code();?>">
									        	 <label onclick="change()"><a href="">New code?</a></label>
									    	</div>
									    </div>
									</div>
									
									
									
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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


function change() // no ';' here
{
    var elem = document.getElementById("myButton1");
    elem.value = random_code(8);
    
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>