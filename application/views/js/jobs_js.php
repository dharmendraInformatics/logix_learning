<script type="text/javascript"> $(document).ready(function(e) {
//============================User============================//

//============================User============================//
$("form#frm-create-job").submit(function(e) { 
  e.preventDefault();
  var clkbtn = $("#btn-create-job");
  clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Jobs/crate_job'); ?>",
    data: formData,
    processData: false,
    contentType: false,
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
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  });
  
});
//===========================/User============================//

//============================User============================//
$("#user_tbl").on("click",".delete-job",function(){ 
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
          url: "<?php echo site_url('Agents/delete_agent'); ?>",
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
//===========================/User============================//

//============================User============================//
$("#user_tbl").on('click', '.change-status', function() {
  change_status($(this), "<?php echo site_url('User/change_user_status'); ?>");
});

function change_status(clkbtn, cngs_link){ clkbtn.prop('disabled',true);
  var cg_id=clkbtn.data('cgid'), cg_status=clkbtn.children('button').data('status');

  $.ajax({
    url : cngs_link,
    type: "POST",
    data: {cgstatus : cg_status, cgid:cg_id},
    dataType: "JSON",
    success: function(data){
      if(data.status=='success'){

        if (cg_status == 1) { clkbtn.html('<button type="button" class="btn btn-info btn-block btn-vsm" data-status="2" title="Click here to Change Status">Active</button>');
        }else{ clkbtn.html('<button type="button" class="btn btn-danger btn-block btn-vsm" data-status="1" title="Click here to Change Status">Blocked</button>');
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
//===========================/User============================//

//===========================/User============================//
}); 
</script>

<script>
  $(document).ready(function(e) {
    $("#mydealer").hide();
    $("#dealer_name").attr("disabled", "disabled");
    $('.check_user').click(function(){
      var job_from = $("input[name='job_from']:checked").val();
      if(job_from=='Dealer'){
        $("#dealer_name").val('');
        $("#mydealer").show();
        $("#mycustomer").hide();

        $("#cust_name").attr("disabled", "disabled");
        $("#dealer_name").removeAttr("disabled"); 
        $("#mob_no").attr("readonly", "readonly");
      }
      else{
        $("#mydealer").hide();
        $("#mycustomer").show();

        $("#mob_no").val('');
        $("#cust_email").val('');
        $("#job_address").val('');
        $("#cust_city").val('');

        $("#dealer_name").attr("disabled", "disabled"); 
        $("#cust_name").removeAttr("disabled");
        $("#mob_no").removeAttr("readonly");
      }
    });
    $('#dealer_name').change(function(){
      var m_dealer_id = $("#dealer_name").val();
       $.ajax({
        type:"post",
        url:'<?php echo base_url("Jobs/selected_dealer");?>',
        dataType  : 'json',  
        data:{m_dealer_id:m_dealer_id},
        success: function(data){
          $("#mob_no").val(data[0].m_dealer_contact);
          $("#cust_email").val(data[0].m_dealer_email);
          $("#job_address").val(data[0].m_dealer_address);
          $("#cust_city").val(data[0].m_dealer_city);
        }
      });
    }); 
    $('#job_brand').change(function(){
      $('#job_model').empty();
      var mm_brand_id = $("#job_brand").val();
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
            $('#job_model').append(html);
        }
      });
    }); 
  });
</script>