<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="plugins/jquery.min.js" type="text/javascript"></script>


 <script src="plugins/jquery.min.js" type="text/javascript"></script> 
<script src="plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
 --><script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>


<script src="plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="js/subview-examples.js"></script>

<script type="text/javascript" src="plugins/select2/select2.min.js"></script>


<script type="text/javascript" src="plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>


<script type="text/javascript" src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="scripts/metronic.js" type="text/javascript"></script>
<script src="scripts/layout.js" type="text/javascript"></script>
<script src="scripts/demo.js" type="text/javascript"></script>
<script src="scripts/form-validation.js"></script>
<script src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="scripts/table-advanced.js"></script>
<script src="plugins/layout/scripts/layout.js" type="text/javascript"></script>
<script src="plugins/layout/scripts/demo.js" type="text/javascript"></script>
<script src="js/login-soft.js" type="text/javascript"></script>

<script src="plugins/moment/min/moment.min.js"></script>
    
<script src="plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="plugins/jquery-mockjax/jquery.mockjax.js"></script>
  
<script src="assets/js/subview-examples.js"></script>
<script src="plugins/mixitup/src/jquery.mixitup.js"></script>
<script src="plugins/lightbox2/js/lightbox.min.js"></script>
<script src="js/pages-gallery.js"></script>

<script src="plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="js/form-wizard.js"></script>
<!-- END PAGE LEVEL STYLES -->
<script>



jQuery(document).ready(function() {

  //  Main.init();   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
	Login.init();
	Demo.init(); // init demo features
    FormValidation.init();
    TableAdvanced.init();
    FormWizard.init();
  //  PagesGallery.init();
         // init background slide images
       $.backstretch([
        "img/1.png",
        "img/2.png",
        "img/3.png",
        "img/4.png"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->