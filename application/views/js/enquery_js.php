<script type="text/javascript"> $(document).ready(function(e) {
//===========================Enquiry==========================//

//===========================Enquiry==========================//
$("#enquiry_tbl").on('click', '.delete-enquiry', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_enquiry'); ?>");
});
//==========================/Enquiry==========================//

//===========================Enquiry==========================//
function delete_row(clkbtn, dlt_link){ clkbtn.prop('disabled',true); 
  var dlt_id = clkbtn.data('value');

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
          data: {delete_id:dlt_id},
          dataType: "JSON",
          success: function(data) { 
            if(data.status=='success'){
              swal(data.message, {icon: "success", timer: 1000, });
              setTimeout(function(){ location.reload(); },1000);
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
//==========================/Enquiry==========================//

//===========================Enquiry==========================//
}); </script>