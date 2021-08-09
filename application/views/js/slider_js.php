<script type="text/javascript"> $(document).ready(function(e) {
//===========================Slider===========================//

//===========================Slider===========================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}

$('#mediaModal').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal #mideaBody").html(''); }
});

$('#slider_tbl').on("click", ".show-media-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/sliders/'); ?>",
  media_title = $(this).parent('tr').data('file');

  if (media_title != '') {
    if (check_file_exist(file_link+media_title)) {
      $("#mediaModal #mideaBody").html('<img src="'+file_link+media_title+'" class="img-responsive" />');
      $("#mediaModal").modal('show');
    }else{ swal("Banner Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Banner Not Found.", { icon: "info", timer: 2000, }); }

});
//==========================/Slider===========================//

//===========================Slider===========================//
$("form#frm-add-slider").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-slider"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Slider/insert_slider'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Slider'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("form#frm-update-slider").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-slider"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Slider/update_slider'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Slider'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("#slider_tbl").on("click",".delete-slider",function(){ 
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
          url: "<?php echo site_url('Slider/delete_slider'); ?>",
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

$("#slider_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Slider/change_slider_status'); ?>");
});
//==========================/Slider===========================//

//===========================Slider===========================//
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
//==========================/Slider===========================//

//==========================/Slider===========================//
}); </script>