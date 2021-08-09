<script>  
$(document).ready(function(){
 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:250,
      height:250,
      type:'square' //circle
    },
    boundary:{
      width:580,
      height:400
    }
  });
  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    var wdth = $(this).data("wdth");
    var hght = $(this).data("hght");
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });
 
  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"<?php echo base_url('Crop/insert_image');?>",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });
});  
</script>
