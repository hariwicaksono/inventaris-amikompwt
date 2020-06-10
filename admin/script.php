<script src="vendors/loadingoverlay.min.js"></script>
<script>
$.LoadingOverlay("show");
$( document ).ready(function(){

});
function load_konten(){
$.LoadingOverlay("hide");
}
</script>        
	    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="assets/scripts.js"></script>		
<script>
$(function() {
    $('.chart').easyPieChart({animate: 1000});
});
</script>		
    
<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/DT_bootstrap.js"></script>
<script>
$(function() {            
});
</script>

<script src="vendors/jGrowl/jquery.jgrowl.js"></script>			   
<script>
$(function() {
    $('.tooltip').tooltip();	
    $('.tooltip-left').tooltip({ placement: 'left' });	
    $('.tooltip-right').tooltip({ placement: 'right' });	
    $('.tooltip-top').tooltip({ placement: 'top' });	
    $('.tooltip-bottom').tooltip({ placement: 'bottom' });

    $('.popover-left').popover({placement: 'left', trigger: 'hover'});
    $('.popover-right').popover({placement: 'right', trigger: 'hover'});
    $('.popover-top').popover({placement: 'top', trigger: 'hover'});
    $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

    $('.notification').click(function() {
        var $id = $(this).attr('id');
        switch($id) {
            case 'notification-sticky':
                $.jGrowl("Stick this!", { sticky: true });
            break;

            case 'notification-header':
                $.jGrowl("A message with a header", { header: 'Important' });
            break;

            default:
                $.jGrowl("Hello world!");
            break;
        }
    });
});
</script>
		
<script src="vendors/jquery.uniform.min.js"></script>
<script src="vendors/chosen.jquery.min.js"></script>
<script src="vendors/bootstrap-datepicker.js"></script>			
<script src="vendors/ckeditor5/ckeditor.js"></script>
		<script>
         ClassicEditor
            .create( document.querySelector( '#ckeditor_full' ) );
        </script>

        <script>
         ClassicEditor
            .create( document.querySelector( '#ckeditor_readonly' ) )
            .then(editor => { 
            //console.log( editor ); 
                editor.isReadOnly = true;
            } ) .catch( error => { 
                //console.error( error ); 
            } );
        </script>

<script src="vendors/fullcalendar/fullcalendar.js"></script>
<script src="vendors/fullcalendar/gcal.js"></script>	
<script src="vendors/bootstrap-datepicker.js"></script>				
<script>
$(function() {
    $(".datepicker").datepicker();
    $(".uniform_on").uniform();
    $(".chzn-select").chosen();               
    $('#rootwizard .finish').click(function() {
        alert('Finished!, Starting over!');
        $('#rootwizard').find("a[href*='tab1']").trigger('click');
    });
});
</script>	

<script src="vendors/sweetalert2/dist/sweetalert2.all.min.js"></script>
