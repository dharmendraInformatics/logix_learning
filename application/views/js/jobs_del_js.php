<script type="text/javascript">
	$("form#frm-update").submit(function(e) { e.preventDefault();
	  var clkbtn = $("#btn-update"); clkbtn.prop('disabled',true);
	  var formData = new FormData(this); 
	  var job_id = $("#t_job_id").val();
	  $.ajax({
	    type: "POST",
	    url: "<?php echo site_url('Jobs/update_jobs'); ?>",
	    data: formData,
	    processData: false,
	    contentType: false,
	    dataType: "JSON", 
	    success: function(data) {
	      if(data.status=='success'){
	        swal(data.message, {icon: "success", timer: 1000, });
	        setTimeout(function(){
	          window.location = "<?php echo site_url('Jobs/details?id='); ?>"+job_id; 
	        },1000);
	      }else{ clkbtn.prop('disabled',false);
	        swal(data.message, {icon: "error", timer: 5000, });
	      }   
	    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
	      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
	    }
	  });
	}); 
	$(document).ready(function(e){
    $('#mm_brand_id').change(function(){
      $('#mm_model_id').empty();
      var mm_brand_id = $("#mm_brand_id").val();
       $.ajax({
         type:"post",
         url:'<?php echo base_url("Jobs/selected_model");?>',
         dataType  : 'json',  
         data:{mm_brand_id:mm_brand_id},
         success: function(data){
          var html="";
            html +='<option value="0">Select Model</option>';
            $.each(data, function(i,d){
            html += '<option value="' + d.m_model_id + '">' + d.m_model_name + '</option>';
            });
            $('#mm_model_id').append(html);
        }
      });
    });
		$("#listing_tbl").on('click', '.delete-jobs', function() {
	  		delete_row($(this), "<?php echo site_url('Jobs/delete_job'); ?>");
		});
	});
</script>
<script>
function delete_row(clkbtn, dlt_link){ clkbtn.prop('disabled',true); 
  var t_job_id = clkbtn.data('value');

  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {

        $.ajax({
          type: "POST",
          url: dlt_link,
          data: {t_job_id:t_job_id},
          dataType: "JSON",
          success: function(data) { 
            if(data.status=='success'){
              swal(data.message, {icon: "success", timer: 1000, });
              setTimeout(function(){ 
              	window.location = "<?php echo site_url('Jobs'); ?>"; 
              },1000);
            }else{ clkbtn.prop('disabled',false);
              swal(data.message, {icon: "error", timer: 5000, });
            }  
          }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
            swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
          }
        });
       
    } else { clkbtn.prop('disabled',false);
      swal("Your Data is safe!", { icon: "info", timer: 2000, });
    }
  });  
}
</script>