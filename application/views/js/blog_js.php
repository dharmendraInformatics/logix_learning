<script type="text/javascript"> $(document).ready(function(e) {
//============================Blog============================//

//============================Blog============================//
$("form#frm-add-blog").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-blog"); clkbtn.prop('disabled',true);

  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Blog/insert_blog'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ window.location = "<?php echo site_url('Blog'); ?>"; },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }  
    }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again",{ icon: "error", timer: 2000, });
    }
  });

});

$("form#frm-update-blog").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-blog"); clkbtn.prop('disabled',true);

  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Blog/update_blog'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ window.location = "<?php echo site_url('Blog'); ?>"; },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }  
    }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again",{ icon: "error", timer: 2000, });
    }
  });

});


$("#blog_tbl").on("click",".delete-blog",function(){ 
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
          url: "<?php echo site_url('Blog/delete_blog'); ?>",
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
//===========================/Blog============================//

//============================Blog============================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}
//===========================/Blog============================//

//============================Blog============================//
$("#blog_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Blog/change_blog_status'); ?>");
});

$('#blog_tbl').on("click", ".show-desc-btn", function(){
  show_description($(this), "<?php echo site_url('Blog/get_blog_desc'); ?>");
});

$('#blog_tbl').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/blogs/'); ?>",
  file_title = $(this).parent('td').data('file');

  show_file($(this), file_link, file_title);
});
//===========================/Blog============================//

//============================Blog============================//
$('#descModal').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#descModal #descBody").html(''); }
});

function show_description(clkbtn, desc_link){ clkbtn.prop('disabled',true);
  var ai_id = clkbtn.parent('td').data('id'), title = clkbtn.parent('td').attr('title');
  $("#descModal .modal-title").html(title);

  $.ajax({
    url : desc_link,
    type: "POST",
    data: {ai_id : ai_id},
    dataType: "JSON",
    success: function(data){ clkbtn.prop('disabled',false);
      if(data.status=='success'){

        $("#descModal #descBody").html(data.desc);
        $("#descModal").modal('show');

      }else{ swal(data.message, {icon: "error", timer: 2000, }); }
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Proble Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });

}

function show_file(clkbtn, file_link, file_title){ clkbtn.prop('disabled',true);
  var title = clkbtn.parent('td').attr('title'); $("#descModal .modal-title").html(title);

  if (file_title != '') {
    if (check_file_exist(file_link+file_title)) {
      $("#descModal #descBody").html('<img src="'+file_link+file_title+'" class="img-responsive" />');
      $("#descModal").modal('show');
    }else{ swal("Image Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Image Not Found.", { icon: "info", timer: 2000, }); }

  clkbtn.prop('disabled',false);
}

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
//===========================/Blog============================//

//===========================/Blog============================//
}); </script>