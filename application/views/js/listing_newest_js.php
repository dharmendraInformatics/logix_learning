<script type="text/javascript"> $(document).ready(function(e) {
//===========================Listing==========================//

//===========================Listing==========================//
$("#listing_tbl").on('change','.checkbox',function(){

	var checkbox = $(this); checkbox.prop('disabled', true);
    var cg_id = checkbox.val(),
    cg_status = (checkbox.is(":checked") === true) ? 1 : 0;

	$.ajax({
		url : "<?php echo site_url('Listing/newest_listing_status'); ?>",
		type: "POST",
		data: {cgstatus : cg_status, cgid:cg_id},
		dataType: "JSON",
		success: function(data){
                                      checkbox.prop('disabled', false);
            if(data.status !='success'){ 
            	if (cg_status == 1) { checkbox.prop("checked", false);
            	} else {              checkbox.prop("checked", true);  }
            	swal(data.message, {icon: "error", timer: 2000, });
           	}

	    }, error: function (jqXHR, status, err){
	    	                      checkbox.prop('disabled', false);
	    	if (cg_status == 1) { checkbox.prop("checked", false);
	    	} else {              checkbox.prop("checked", true);  }
	    	swal("Some Proble Occurred!! please try again", { icon: "error", timer: 2000, });
	    }
	});

});
//==========================/Listing==========================//

//==========================/Listing==========================//
}); </script>