<script type="text/javascript"> $(document).ready(function(e) {
//===========================Listing==========================//

//===========================Listing==========================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}
//==========================/Listing==========================//

//===========================Listing==========================//
$(document).on("click", "#frm-update-listing1 .close-banner, #frm-update-listing9 .close-banner, #frm-update-listing10 .close-banner", function(){
  $(this).parent('td').parent('tr').remove();
});

$('#frm-update-listing1, #frm-update-listing9, #frm-update-listing10').on("click", ".view-banner", function(){
  var in_tr = $(this).parent('td').parent('tr');
  var banner_id = in_tr.children("td").eq(0).find("input[type=file]").attr('id');

  if($('#'+banner_id).val()==''){ return; }

  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById(banner_id).files[0]);

  oFReader.onload = function (oFREvent) {
    in_tr.after('<tr>\
      <td colspan="2">\
        <button type="button" class="close close-banner" >&times;</button>\
        <img src="'+oFREvent.target.result+'" class="img-responsive" />\
      </td>\
    </tr>');
  };

});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing1Btn').on("click", function(){ listing1_update($(this)); });

function listing1_update(clk_btn){

  clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

  // $("#listing1Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing1_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing1 input[name=m_listing_pbanner]").val(data.list[0].m_listing_banner);
        $("form#frm-update-listing1 input[name=m_listing_pbanner2]").val(data.list[0].m_listing_banner2);
        $("form#frm-update-listing1 input[name=m_listing_pbanner3]").val(data.list[0].m_listing_banner3);
        $("form#frm-update-listing1 input[name=m_listing_pbanner4]").val(data.list[0].m_listing_banner4);

        $("#listing1Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });
}

$("form#frm-update-listing1").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing1"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing1'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing1").html(data.list);
        $("#listing1Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing2Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing2Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing2_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing2 input[name=m_listing_title]").val(data.list[0].m_listing_title);
        $("form#frm-update-listing2 select[name=m_listing_status]").val(data.list[0].m_listing_status);
        $("form#frm-update-listing2 textarea[name=m_listing_address]").val(data.list[0].m_listing_address);
        $("form#frm-update-listing2 textarea[name=m_listing_intro]").val(data.list[0].m_listing_intro);

        $("#listing2Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing2").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing2"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing2'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing2").html(data.list);
        $("#listing2Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing3Btn').on("click", function(){
  $('form#frm-update-listing3 .select2-container').attr('style','width:100%;');
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing3Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing3_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing3 select[id=amenities_id]").html(data.list);

        $("#listing3Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing3").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing3"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing3'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing3").html(data.list);
        $("#listing3Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("#target-output-listing3").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Listing/change_amenities_status'); ?>");
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing4Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

  //$("#listing4Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing4_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing4 input[name=m_listing_fb]").val(data.list[0].m_listing_fb);
        $("form#frm-update-listing4 input[name=m_listing_twitter]").val(data.list[0].m_listing_twitter);
        $("form#frm-update-listing4 input[name=m_listing_insta]").val(data.list[0].m_listing_insta);
        $("form#frm-update-listing4 input[name=m_listing_youtube]").val(data.list[0].m_listing_youtube);
        $("form#frm-update-listing4 input[name=m_listing_linkedin]").val(data.list[0].m_listing_linkedin);
        $("form#frm-update-listing4 input[name=m_listing_whatapp]").val(data.list[0].m_listing_whatapp);
        $("form#frm-update-listing4 input[name=m_listing_telegram]").val(data.list[0].m_listing_telegram);

        $("#listing4Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing4").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing4"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing4'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing4").html(data.list);
        $("#listing4Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing5Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing5Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing5_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

  $("form#frm-update-listing5 textarea[name=m_listing_keywords]").val(data.list[0].m_listing_keywords);
  $("form#frm-update-listing5 textarea[name=m_listing_tags]").val(data.list[0].m_listing_tags);
 var desc_div = $("form#frm-update-listing5 textarea[name=m_listing_description]").parent('div.form-group');

        desc_div.html('<label>Description</label>\
<textarea class="form-control" name="m_listing_description" id="m_listing_description" placeholder="Enter Description">'+data.list[0].m_listing_description+'</textarea>'+"<script>\
   tinymce.init({\
      selector: '#m_listing_description',\
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',\
      toolbar: 'cut copy paste undo redo fontselect fontsizeselect casechange bold italic underline justifyleft justifycenter justifyright bullist numlist table forecolor backcolor',\
      toolbar_mode: 'floating',\
      tinycomments_mode: 'embedded',\
      tinycomments_author: 'Author name',\
    });<"+'/'+"script>");

        $("#listing5Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing5").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing5"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing5'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing5").html(data.list);
        $("#listing5Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing6Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing6Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing6_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing6 input[name=m_listing_address]").val(data.list[0].m_listing_address);
        $("form#frm-update-listing6 input[name=m_listing_mobile]").val(data.list[0].m_listing_mobile);
        $("form#frm-update-listing6 input[name=m_listing_alt_mobile]").val(data.list[0].m_listing_alt_mobile);
        $("form#frm-update-listing6 input[name=m_listing_whatapp]").val(data.list[0].m_listing_whatapp);
        $("form#frm-update-listing6 input[name=m_listing_email]").val(data.list[0].m_listing_email);
        $("form#frm-update-listing6 input[name=m_listing_website]").val(data.list[0].m_listing_website);

        $("#listing6Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing6").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing6"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing6'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing6").html(data.list);
        $("#listing6Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing7Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing7Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing7_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing7 input[name=m_listing_longitude]").val(data.list[0].m_listing_longitude);
        $("form#frm-update-listing7 input[name=m_listing_latitude]").val(data.list[0].m_listing_latitude);

        $("#listing7Modal").modal('show');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing7").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing7"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing7'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing7").html(data.list);
        $("#listing7Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing8Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing8Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing8_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing8 input[name=m_listing_video]").val(data.list[0].m_listing_video);

        $("#listing8Modal").modal('show'); $('#put-video').html('');

      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing8").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing8"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing8'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing8").html(data.list);
        $("#listing8Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//==========================/Listing==========================//

//===========================Listing==========================//
$(document).on("click", "#frm-update-listing8 .close-video", function(){
  $(this).parent('td').html('');
});

$('#frm-update-listing8').on("click", "#view-video", function(){
  var video_url = $('#frm-update-listing8').find("input[name=m_listing_video]").val();
  $('#put-video').html('');

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_youtube_embed_link'); ?>",
    data: {yt_url:video_url},
    dataType: "JSON",
    success: function(data) {
      if(data.status=='success'){

        $('#put-video').html('<button type="button" class="close close-video" >&times;</button>\
          <iframe width="100%" height="360px" src="'+data.link+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

      }
    }, error: function (jqXHR, status, err) {}
  });

});
//==========================/Listing==========================//

//===========================Listing==========================//
$('#listing10Btn').on("click", function(){
  var clk_btn = $(this); clk_btn.prop('disabled',true);
  var ld_id = $("#m_listing_id").val();

 // $("#listing10Modal").modal('show'); clk_btn.prop('disabled',false); return;

  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/get_listing10_dtl'); ?>",
    data: {id:ld_id},
    dataType: "JSON",
    success: function(data) { clk_btn.prop('disabled',false);
      if(data.status=='success'){

        $("form#frm-update-listing10 input[name=m_listing_plogo]").val(data.list[0].m_listing_logo);

        $("#listing10Modal").modal('show');
      }else{ alert(data.message); }
    }, error: function (jqXHR, status, err) { clk_btn.prop('disabled',false);
      alert('Some problem occured!! please try again');
    }
  });

});

$("form#frm-update-listing10").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-listing10"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Listing/update_listing10'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        $("#target-output-listing10").html(data.list);
        $("#listing10Modal").modal('hide');
        swal(data.message, {icon: "success", timer: 1000, });
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
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

$("#gallery_tbl").on('click', '.delete-gallery', function() {
  delete_row($(this), "<?php echo site_url('Listing/delete_listing_gallery'); ?>");
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

$("#gallery_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Listing/change_gallery_status'); ?>");
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

//===========================Listing==========================//
$('#service_tbl').on("click", ".show-desc-btn", function(){
  show_description($(this), "<?php echo site_url('Listing/get_service_desc'); ?>");
});

$('#review_tbl').on("click", ".show-desc-btn", function(){
  show_description($(this), "<?php echo site_url('Listing/get_review_comment'); ?>");
});

$('#product_tbl').on("click", ".show-desc-btn", function(){
  show_description($(this), "<?php echo site_url('Listing/get_product_desc'); ?>");
});
//==========================/Listing==========================//

//===========================Listing==========================//
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

function show_file2(clkbtn, file_link, file_title){ clkbtn.prop('disabled',true);
  var title = clkbtn.parent('td').attr('title'); $("#descModal .modal-title").html(title);

  if (file_title != '') {
    if (check_file_exist(file_link+file_title)) {
      $("#descModal #descBody").html('<iframe src="'+file_link+file_title+'" style="width: 100%;" height="500"></iframe>');
      $("#descModal").modal('show');
    }else{ swal(title+" Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal(title+" Not Found.", { icon: "info", timer: 2000, }); }

  clkbtn.prop('disabled',false);
}

function show_file(clkbtn, file_link, file_title){ clkbtn.prop('disabled',true);
  var title = clkbtn.parent('td').attr('title'); $("#descModal .modal-title").html(title);

  if (file_title != '') {
    if (check_file_exist(file_link+file_title)) {
      $("#descModal #descBody").html('<img src="'+file_link+file_title+'" class="img-responsive" />');
      $("#descModal").modal('show');
    }else{ swal(title+" Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal(title+" Not Found.", { icon: "info", timer: 2000, }); }

  clkbtn.prop('disabled',false);
}

function edit_tbl_row(clkbtn, dtl_link, title){ clkbtn.prop('disabled',true);
  var ai_id = clkbtn.data('value'); $("#descModal .modal-title").html(title);

  $.ajax({
    url : dtl_link,
    type: "POST",
    data: {ai_id : ai_id},
    dataType: "JSON",
    success: function(data){ clkbtn.prop('disabled',false);
      if(data.status=='success'){

        $("#descModal #descBody").html(data.edt_form);
        $("#descModal").modal('show');

      }else{ swal(data.message, {icon: "error", timer: 2000, }); }
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Proble Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });

}
//==========================/Listing==========================//

//===========================Listing==========================//
$('#target-output-listing9').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/catalog/'); ?>",
  file_title = $(this).data('file');

  show_file2($(this), file_link, file_title);

});

$('#product_tbl').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/products/'); ?>",
  file_title = $(this).parent('td').data('file');

  show_file($(this), file_link, file_title);

});

$('#gallery_tbl').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/gallery/'); ?>",
  file_title = $(this).parent('td').data('file');

  show_file($(this), file_link, file_title);
});
//==========================/Listing==========================//

//=========================Edit-Teble=========================//
$('#gallery_tbl').on("click", ".edit-gallery", function(){
  edit_tbl_row($(this), "<?php echo site_url('Listing/get_gallery_dtl'); ?>", "Edit Gallery");
});

$('#product_tbl').on("click", ".edit-product", function(){
  edit_tbl_row($(this), "<?php echo site_url('Listing/get_product_dtl'); ?>", "Edit Product");
});

$('#service_tbl').on("click", ".edit-service", function(){
  edit_tbl_row($(this), "<?php echo site_url('Listing/get_service_dtl'); ?>", "Edit Service");
});

$(document).submit("form#frm-update-tbl_row", function(e) { e.preventDefault();

  var link = $("form#frm-update-tbl_row").data('link');
  var clkbtn = $("#btn-update-tbl_row"); clkbtn.prop('disabled',true);
  var myForm = document.getElementById('frm-update-tbl_row');
  var formData = new FormData(myForm);
  
  $.ajax({
    type: "POST",
    url: link,
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) { clkbtn.prop('disabled',false);
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){ location.reload(); },1000);
      }else{
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//========================/Edit-Teble=========================//

//===========================Listing==========================//
$(document).on('change','#checkbox_status .is_popular',function(){
  checkbox_status($(this), "<?php echo site_url('Listing/popular_listing_status'); ?>");
});

$(document).on('change','#checkbox_status .is_newest',function(){
  checkbox_status($(this), "<?php echo site_url('Listing/newest_listing_status'); ?>");
});

function checkbox_status(checkbox, sts_link){

  checkbox.prop('disabled', true);
  var cg_id = checkbox.val(),
  cg_status = (checkbox.is(":checked") === true) ? 1 : 0;

  $.ajax({
    url : sts_link,
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

}
//==========================/Listing==========================//

//==========================/Listing==========================//
}); </script>