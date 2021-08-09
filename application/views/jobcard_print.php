<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
</head>
<style type="text/css">
	.admin {
		float: left;
	}
	.activit {
		float: right;
	}
	.fulltab {
		border:1px solid grey;
	}
	.jobdetails {
		
		border-left: 1px solid lightgrey;
	}

	body {
		visibility: hidden;
	}

	@media print {
		body {
			visibility: visible;
		}
	}
</style>
<body >


<div class="container-fluid">
<div class="fulltab">
<h5 align="center" style="margin-bottom: 10px; margin-top: 10px;">JOB CARD</h5>
<div class="row">
<div class="col-md-7 pl-4">
<div class="admin">
<h2 align="center" style="margin: 0px;">ARYABHATT COMPUTER & SERVICES</h2>
<h6 align="center" style="margin: 0px;">Shop No. 27, Panchsheel Parisar, Behind Dhillon Complex, Superl, Bhilai(C.G,)</h6>
<h6 align="center" style="margin: 0px;">Ph No. 0788-4218098</h6>
</div>
</div>

<div class="col-md-5 pr-4">
<div class="activit">
	<h5 >Office Time - 11A.M. to 7P.M</h5>
	<h6 >Job Status Query Time 12:30 P.M to 6P.M</h6>
	<h5 style="margin: 0px;">LUNCH TIME 2:30 P.M TO 3:30 P.M.</h5>
</div>
</div>
<div class="col-md-12">
	<hr>
</div>


<div class="col-md-6 pr-0">
<div class="customerdetails pl-4">
	<h6>Name: <b><?php echo $job_details[0]->t_job_name;?></b></h6>
	<h6>Address: <b><?php echo $job_details[0]->t_job_address?></b></h6>
	<h6>City: <b><?php echo $job_details[0]->m_city_name?></b></h6>
	<h6>Contact No.: <b><?php echo $job_details[0]->t_job_contact?></b></h6>
	<h6>Email: <b><?php echo $job_details[0]->t_job_email?></b></h6>
	<hr>
	<h6>Remark: <span><?php echo $job_details[0]->t_job_remark?></span></h6>
	<h6>Expected Estimate <span><?php echo $job_details[0]->t_job_estimate?></span></h6>
</div>
</div>

<div class="col-md-6 pl-0">
<div class="jobdetails pl-2 pr-4">
	<h6>Job No.: <b><?php echo $job_details[0]->t_job_no?></b></h6>
	<h6>Job Date: <b>
		<?php if($job_details[0]->t_job_date!='0000-00-00'){
			echo date('d-m-Y',strtotime($job_details[0]->t_job_date));
		}
		?>
		</b></h6>
	<h6>Expected Date: <b>
		<?php if($job_details[0]->t_job_expected_date!='0000-00-00'){
			echo date('d-m-Y',strtotime($job_details[0]->t_job_expected_date));
		}
		?>
		</b></h6>
	<hr>
	<hr>
	<h6>Brand Name: <b><?php echo $job_details[0]->m_brand_name?></b></h6>
	<h6>Model No.: <b><?php echo $job_details[0]->m_model_name?></b></h6>
	<h6>Serial No.: <b><?php echo $job_details[0]->t_job_serial_no?></b></h6>
	
	<h6>Accessories: 
		<span style="text-transform: uppercase;">
		<?php
		if(!empty($job_acc)){
			foreach($job_acc as $acc){
				echo $acc->m_accesory_name.', ';
			}
		}
		?>
		</span>
	</h6>
	<h6>Current Status.: 
		<b>
		<?php
		if(!empty($job_curr)){
			foreach($job_curr as $curr){
				echo $curr->m_job_curr_name.', ';
			}
		}
		?>
		</b>
	</h6>
</div>
</div>

<div class="col-md-12">
<hr>

<div class="terms pl-4">
	<p>Terms & Conditions</p>
	<ul style="list-style-type: none; padding: 0px;">
		<li>1. Your machine is at your own risk, it is possible, it may be completely dead while in repairing process.  </li>
		<li>2. While taking delivery make sure that the accessories of your machine are along with.</li>
		<li>3. Warranty covers one week only in the part of machine repaired</li>
		<li>4. No claim of breakage or damage while repairing process will be accepted.</li>
		<li>5. We won't provide the burned or not working IC & Components of your machine.</li>
		
		
   </ul>
   <div class="row">
   <div class="col-md-6">
   <span><b>Customer's Signature</b></span>
   <br>
   <br>
   <span>With complete statisfaction</span>
   </div>
   <div class="col-md-6 pr-4">
   <div style="float: right;">
   	<span><b>For, ARYABHATT COMPUTER & SERVICES</b></span>
   	<br>
   	<br>
   	<span>Authorised Signatory</span>
   	</div>
   </div>
   </div>
</div>
</div>


</div>
</div>
</div>

<script type="text/javascript">
window.print();
 setTimeout(window.close, 500);
</script>

</body>
</html>