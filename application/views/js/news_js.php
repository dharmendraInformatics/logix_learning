<script>
  $(document).ready(function(e) {
    $("form#frm-add").submit(function(e) { e.preventDefault();
    var clkbtn = $("#btn-add"); clkbtn.prop('disabled',true);
    var formData = new FormData(this); 
    
    $.ajax({
      type: "POST",
      url: "<?php echo site_url('News/insert_news'); ?>",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "JSON", 
      success: function(data) {
        if(data.status=='success'){
          swal(data.message, {icon: "success", timer: 1000, });
          setTimeout(function(){
            window.location = "<?php echo site_url('News'); ?>"; 
          },1000);
        }else{ clkbtn.prop('disabled',false);
          swal(data.message, {icon: "error", timer: 5000, });
        }   
      }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
        swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
      }
    });
  });
  $("form#frm-update").submit(function(e) { e.preventDefault();
      var clkbtn = $("#btn-update"); clkbtn.prop('disabled',true);
      var formData = new FormData(this); 
      
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('News/update_news'); ?>",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON", 
        success: function(data) {
          if(data.status=='success'){
            swal(data.message, {icon: "success", timer: 1000, });
            setTimeout(function(){
              window.location = "<?php echo site_url('News'); ?>"; 
            },1000);
          }else{ clkbtn.prop('disabled',false);
            swal(data.message, {icon: "error", timer: 5000, });
          }   
        }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
          swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
        }
      });
    });
    $("#my_tbl").on("click",".delete-data",function(){ 
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
            url: "<?php echo site_url('News/delete_news'); ?>",
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
  });
</script>
<script>
  function viewDetails(id){
    $("#news_descr").val('');
    var msg = $("#news_desc"+id).val();
    $("#news_descr").val(msg);
    $('#mymodal').modal('show');
  }
</script>