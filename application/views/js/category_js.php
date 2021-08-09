<script type="text/javascript"> $(document).ready(function(e) {
//==========================Category==========================//

//==========================Category==========================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}

$('#mediaModal').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal #mideaBody").html(''); }
});

$('#category_tbl').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/category/'); ?>",
  media_title = $(this).parent('td').parent('tr').data('file');

  if (media_title != '') {
    if (check_file_exist(file_link+media_title)) {
      $("#mediaModal #mideaBody").html('<img src="'+file_link+media_title+'" class="img-responsive" />');
      $("#mediaModal").modal('show');
    }else{ swal("Icon Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Icon Not Found.", { icon: "info", timer: 2000, }); }

});

$('#mediaModal2').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal2 #mideaBody2").html(''); }
});

$('#category_tbl').on("click", ".show-file2-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/category/'); ?>",
  media_title = $(this).parent('td').parent('tr').data('file2');

  if (media_title != '') {
    if (check_file_exist(file_link+media_title)) {
      $("#mediaModal2 #mideaBody2").html('<img src="'+file_link+media_title+'" class="img-responsive" />');
      $("#mediaModal2").modal('show');
    }else{ swal("Image Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Image Not Found.", { icon: "info", timer: 2000, }); }

});

$('#mediaModal3').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal3 #mideaBody3").html(''); }
});

$('#category_tbl').on("click", ".show-file3-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/category/'); ?>",
  media_title = $(this).parent('td').parent('tr').data('file3');

  if (media_title != '') {
    if (check_file_exist(file_link+media_title)) {
      $("#mediaModal3 #mideaBody3").html('<img src="'+file_link+media_title+'" class="img-responsive" />');
      $("#mediaModal3").modal('show');
    }else{ swal("Banner Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Banner Not Found.", { icon: "info", timer: 2000, }); }

});

$('#mediaModal4').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal4 #mideaBody4").html(''); }
});

$('#category_tbl').on("click", ".show-desc-btn", function(){
  var media_title = $(this).parent('td').data('desc');

  if (media_title != '') {
    $("#mediaModal4 #mideaBody4").html(media_title);
    $("#mediaModal4").modal('show');

  }else{ swal("No Description.", { icon: "info", timer: 2000, }); }

});
//=========================/Category==========================//

//==========================Category==========================//
$("form#frm-add-category").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-category"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Category/insert_category'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Category'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("form#frm-update-category").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-category"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Category/update_category'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Category'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("#category_tbl").on("click",".delete-category",function(){ 
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
          url: "<?php echo site_url('Category/delete_category'); ?>",
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

$("#category_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Category/change_category_status'); ?>");
});
//=========================/Category==========================//

//==========================Category==========================//
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
//=========================/Category==========================//

//=========================/Category==========================//
}); </script>