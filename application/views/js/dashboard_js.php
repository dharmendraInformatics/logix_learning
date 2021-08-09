<script>
	function searchJob(){
		var search_job_no = $("#search_job_no").val();
		if(search_job_no==''){
			alert("Please Enter Job No.");
		}
		else{
			$.ajax({
				type:"post",
				url:'<?php echo base_url("Welcome/get_jobs");?>',
				dataType  : 'json',  
				data:{search_job_no:search_job_no},
				success: function(data){
					if(data.status==1){
						window.location.href="<?php echo base_url('Jobs/details?id=');?>"+data.job_id;
					}
					else{
						alert('Invalid Job No. Please try again!');
					}
				}
			});
		}
	}
</script>