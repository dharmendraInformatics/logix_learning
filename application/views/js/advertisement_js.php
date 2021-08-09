<script type="text/javascript"> $(document).ready(function(e) {
//========================Advertisement=======================//

//========================Advertisement=======================//
$('#m_ad_clickable').on("change", function(){
  if ($('#m_ad_clickable :selected').val() == 1) {
    $('#m_ad_website').parent('td').show();
    $('#m_ad_website').focus();
  }else{ $('#m_ad_website').parent('td').hide();
    $('#m_ad_website').val('');
  }
});
//=======================/Advertisement=======================//

//========================Advertisement=======================//
function check_file_exist(urlToFile='') {
  if (urlToFile=='') { return false; }
  var xhr = new XMLHttpRequest(); xhr.open('HEAD', urlToFile, false); xhr.send();
  return (xhr.status == "404") ? false : true;
}

$('#mediaModal').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal #mideaBody").html(''); }
});

$('#advertisement_tbl').on("click", ".show-file-btn", function(){
  var file_link  = "<?php echo base_url('../uploads/advertise/'); ?>",
  media_title = $(this).parent('td').parent('tr').data('file');

  if (media_title != '') {
    if (check_file_exist(file_link+media_title)) {
      $("#mediaModal #mideaBody").html('<img src="'+file_link+media_title+'" class="img-responsive" />');
      $("#mediaModal").modal('show');
    }else{ swal("Banner Not Found.", { icon: "error", timer: 2000, }); }

  }else{ swal("Banner Not Found.", { icon: "info", timer: 2000, }); }

});

$('#mediaModal4').on("click", "button", function(){
  if ($(this).data('dismiss') == 'modal') { $("#mediaModal4 #mideaBody4").html(''); }
});

$('#advertisement_tbl').on("click", ".show-desc-btn", function(){
  var media_title = $(this).parent('td').data('desc');

  if (media_title != '') {
    $("#mediaModal4 #mideaBody4").html(media_title);
    $("#mediaModal4").modal('show');

  }else{ swal("No Description.", { icon: "info", timer: 2000, }); }

});
//=======================/Advertisement=======================//

//========================Advertisement=======================//
$("form#frm-add-advertisement").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-add-advertisement"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Advertisement/insert_advertisement'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Advertisement'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("form#frm-update-advertisement").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-advertisement"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Advertisement/update_advertisement'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Advertisement'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});

$("#advertisement_tbl").on("click",".delete-advertisement",function(){ 
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
          url: "<?php echo site_url('Advertisement/delete_advertisement'); ?>",
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

$("#advertisement_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('Advertisement/change_status'); ?>");
});
//=======================/Advertisement=======================//

//========================Advertisement=======================//
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
//=======================/Advertisement=======================//

//========================Advertisement=======================//
$('#m_ad_start_date, #m_ad_start_time, #m_ad_end_date, #m_ad_end_time').on("change", function(){
  var sdate = $("#m_ad_start_date").val(), stime = $("#m_ad_start_time").val(),
  edate = $("#m_ad_end_date").val(), etime = $("#m_ad_end_time").val();

  if (sdate != '' && stime != '' && edate != '' && etime != '') {
    sdate = sdate.split('-'); stime = stime.split(':');
    edate = edate.split('-'); etime = etime.split(':');

    var dt1 = new Date(sdate[0], sdate[1], sdate[2], stime[0], stime[1], 0);
    var dt2 = new Date(edate[0], edate[1], edate[2], etime[0], etime[1], 0);

    var diff = get_date_diff(dt1, dt2);

    $("#t_adv_days").html(diff);

  }else{ $("#t_adv_days").html('00'); }

});
//=======================/Advertisement=======================//

//========================Advertisement=======================//
function get_date_diff(dt2, dt1) {

  var diff =(dt2.getTime() - dt1.getTime()) / 1000;
  diff = (diff/3600)/24;
  return Math.abs(Math.round(diff));
  
}
//=======================/Advertisement=======================//

//=======================/Advertisement=======================//
}); </script>