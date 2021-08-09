<script>
  function importLeads(){
    var formData    =   new FormData($("#formdata")[0]);
    var action      =   $('.formdata').attr('action');
    var import_lead_file = $("#import_lead_file").val();
    $("#btn-add").prop("disabled", "disabled");
    if(import_file==''){
      alert('Please Select Excel File');
    }
    else if(import_lead_file!=''){
      alert('कृपया कुछ समय प्रतीक्षा करें! एक्सेल फाइल आयत होने के बाद आपको एक मैसेज शो होगा !');
      $.ajax({
        type:"post",
        url:action,
        data:formData,
        processData:false,
        contentType:false,
        cache:false,
        async:false,
        success: function(r){
          var values = JSON.parse(r);
          if(values.status=='1'){
            swal({
              title: "Successfully!",
              text:  values.message,
              icon:  "success",
              button: "OK",
            });
            //location.reload();
            setTimeout(function(){ window.location = "<?php echo site_url('Document/aavas_yojna_applicant'); ?>" },2000);
            //window.location = "<?php echo site_url('Document/aavas_yojna_applicant'); ?>";
          }
          else if(values.status=='0'){

          }
          else{
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: values.message,
            })
          }
          
         }
      });
    }
  }
  function printApplication(app_id){
    $.ajax({
       type:"post",
       url:'<?php echo base_url("Document/checked_print");?>',
       dataType  : 'json',  
       data:
       {
         app_id:app_id,
       },
       success: function(data){
         if(data.status==1){
          swal({
            title: "इस आवेदन को एकबार पहले प्रिंट किया जा चुका हैं?",
            text: "फिर से प्रिंट करने के लिए ओके बटन पर क्लिक करें या फिर कैंसिल कर दे!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
              go_to_url = "<?php echo base_url('Document/print_praman_patra?app_id=');?>"+app_id;
              window.open(go_to_url, '_blank');
            } 
            else{
              swal("Your Data is safe!", { icon: "info", timer: 2000, });
            }
          });
         }
         else{
          go_to_url = "<?php echo base_url('Document/print_praman_patra?app_id=');?>"+app_id;
          window.open(go_to_url, '_blank');
         }
       }
    });
    /*go_to_url = "<?php echo base_url('Document/print_praman_patra?app_id=');?>"+app_id;
    window.open(go_to_url, '_blank');*/
  }
  function printbuildingApplication(app_id){
    $.ajax({
       type:"post",
       url:'<?php echo base_url("Document/checked_building_print");?>',
       dataType  : 'json',  
       data:
       {
         app_id:app_id,
       },
       success: function(data){
         if(data.status==1){
          swal({
            title: "इस आवेदन को एकबार पहले प्रिंट किया जा चुका हैं?",
            text: "फिर से प्रिंट करने के लिए ओके बटन पर क्लिक करें या फिर कैंसिल कर दे!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
              go_to_url = "<?php echo base_url('Document/print_bhavan_anuggya?app_id=');?>"+app_id;
              window.open(go_to_url, '_blank');
            } 
            else{
              swal("Your Data is safe!", { icon: "info", timer: 2000, });
            }
          });
         }
         else{
          go_to_url = "<?php echo base_url('Document/print_bhavan_anuggya?app_id=');?>"+app_id;
          window.open(go_to_url, '_blank');
         }
       }
    });
  }
</script>

<script>
  $(document).ready(function(e) {
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
            url: "<?php echo site_url('Document/delete_aavas_yojna_applicant'); ?>",
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