<script type="text/javascript"> $(document).ready(function(e) {
//=========================Contact============================//

//=========================Contact============================//
$("form#frm-add-contact").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-contact"); clkbtn.prop('disabled',true);

  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Contact/insert_contact'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ window.location = "<?php echo site_url('Contact'); ?>"; },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }  
    }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again",{ icon: "error", timer: 2000, });
    }
  });

});

$("form#frm-update-contact").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-contact"); clkbtn.prop('disabled',true);

  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Contact/update_contact'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ window.location = "<?php echo site_url('Contact'); ?>"; },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }  
    }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again",{ icon: "error", timer: 2000, });
    }
  });

});


$("#contact_tbl").on("click",".delete-contact",function(){ 
  var clkbtn = $(this); clkbtn.prop('disabled',true);
  var dlt_id = $(this).data('value');

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
          url: "<?php echo site_url('Contact/delete_contact'); ?>",
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
});
//========================/Contact============================//

//========================/Contact============================//
}); </script>