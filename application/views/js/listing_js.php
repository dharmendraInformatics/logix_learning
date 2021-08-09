<script type="text/javascript"> $(document).ready(function(e) {
//===========================Listing==========================//

//===========================Listing==========================//
$("#listing_tbl").on('click', '.delete-listing', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing'); ?>");
});
//==========================/Listing==========================//

//===========================Listing==========================//
$("#listing_tbl").on('click', '.change-status', function(){
  var cg_id=$(this).data('id');
  var cg_status=$(this).data('status');
  
  var clk_btn=$(this);
  var my_div = $(this).parents("div");
  var my_btn = my_div.children("button");

  $.ajax({
    url : "<?php echo site_url('Listing/change_status'); ?>",
    type: "POST",
    data: {cgstatus : cg_status, cgid:cg_id},
    dataType: "JSON",
    success: function(data){
      if(data.status=='success'){
        $(".status_"+cg_id).prop('disabled',false);
        $(clk_btn).prop('disabled',true);
        if (cg_status == 1){
          $(my_btn).attr( "class", "btn btn-info btn-block btn-vsm dropdown-toggle");
          $(my_btn).html("Active <span class='caret'></span>");
        }else if (cg_status == 2){
          $(my_btn).attr( "class", "btn btn-danger btn-block btn-vsm dropdown-toggle");
          $(my_btn).html("Block <span class='caret'></span>");
        }else if (cg_status == 0){
          $(my_btn).attr( "class", "btn btn-warning btn-block btn-vsm dropdown-toggle");
          $(my_btn).html("Pending <span class='caret'></span>");
        }
      }else{
        swal(data.message, {icon: "error", timer: 2000, });
      }
    }, error: function (jqXHR, status, err){
      swal("Some Proble Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
});
//==========================/Listing==========================//

//===========================Listing==========================//
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
//==========================/Listing==========================//

//===========================Listing==========================//
$("#service_tbl").on('click', '.delete-service', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_service'); ?>");
});

$("#review_tbl").on('click', '.delete-review', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_review'); ?>");
});

$("#product_tbl").on('click', '.delete-product', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_product'); ?>");
});

$("#enquiry_tbl").on('click', '.delete-enquiry', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_enquiry'); ?>");
});
//==========================/Listing==========================//

//===========================Listing==========================//
$("#service_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Listing/change_service_status'); ?>");
});

$("#review_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Listing/change_review_status'); ?>");
});

$("#product_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Listing/change_product_status'); ?>");
});
//==========================/Listing==========================//

//===========================Listing==========================//
function change_status(clkbtn, cngs_link){ clkbtn.prop('disabled',true);
  var cg_id=clkbtn.data('cgid'), cg_status=clkbtn.children('button').data('status');

  $.ajax({
    url : cngs_link,
    type: "POST",
    data: {cgstatus : cg_status, cgid:cg_id},
    dataType: "JSON",
    success: function(data){
      if(data.status=='success'){

        if (cg_status == 1) { clkbtn.html('<button type="button" class="btn btn-info btn-block btn-vsm" data-status="0" title="Click here to Change Status">Active</button>');
        }else{ clkbtn.html('<button type="button" class="btn btn-danger btn-block btn-vsm" data-status="1" title="Click here to Change Status">In-Active</button>');
        }
        clkbtn.prop('disabled',false);

      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 2000, });
      }
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Proble Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });

}
//==========================/Listing==========================//

//==========================/Listing==========================//
}); </script>