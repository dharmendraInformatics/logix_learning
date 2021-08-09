<script>
  function viewDetails(id){
    $("#contact_msg").val('');
    var msg = $("#contact_messgae"+id).val();
    $("#contact_msg").val(msg);
    $('#mymodal').modal('show');
  }
</script>