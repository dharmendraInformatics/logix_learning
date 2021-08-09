<!-- =========================View==============Fix========== -->

<!-- ========================Header==============Fix========= --> 
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->

<!-- =========================View===============Fix========= -->
  <!-- Right Side Content Start -->
    <div class="page-content">
      <div class="container-fluid">
<!-- ========================/View===============Fix========= -->

<!-- ======================Page Style======================== -->
<style type="text/css">

  .select2-container--default .select2-selection--single .select2-selection__rendered { line-height: 18px; }
  .select2-container--default .select2-selection--single .select2-selection__arrow b { top: 30%; }
  .select2-selection.select2-selection--single{ height: auto; }
</style>
<!-- ======================Page Style======================== -->

<!-- ======================Page Title======================== -->
<!-- Breadcromb Row Start -->
<div class="row">
   <div class="col-md-12">
      <div class="breadcromb-area">
         <div class="row">
            <div class="col-md-2 col-sm-2">
              <div class="seipkon-breadcromb-left">
                <h3>All Jobs</h3>
              </div>
            </div>
            <div class="col-md-10 col-sm-10">
              <a href="<?php echo site_url('Jobs/addJob') ?>" class="btn btn-info pull-right">Create Job</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Breadcromb Row -->
<!-- =====================/Page Title======================== -->
<?php $status_list = array('1' => "Running", '2' => "Delivered", '3' => "Cancelled"); ?>
<!-- =====================Page Content======================= -->
<!-- View Counselor Area Start -->
<div class="row">
 <div class="col-md-12">
    <div class="page-box">
<form method="GET" action="<?php echo site_url('Jobs'); ?>">
  <table style="width: 100%;">
    <tbody>
      <tr>
        <td width="5%">Brands</td>
        <td width="12%">
          <select class="form-control select2" name="br" onchange="this.form.submit()">
            <?php echo '<option value=""> - All - </option>';
            if (!empty($brands)) { 
              foreach ($brands as $br) {
              echo '<option value="'.$br->m_brand_id.'"';
              if($br->m_brand_id == $this->input->get('br')) echo ' selected';
              echo '>'.$br->m_brand_name.'</option>';
            }} ?>
          </select>
        </td>
        <td width="1%"></td>
        <td width="3%">Model</td>
        <td width="12%">
          <select class="form-control select2" name="md" onchange="this.form.submit()">
            <?php echo '<option value=""> - All - </option>';
            if (!empty($models)) { 
              foreach ($models as $md) {
              echo '<option value="'.$md->m_model_id.'"';
              if($md->m_model_id == $this->input->get('md')) echo ' selected';
              echo '>'.$md->m_model_name.'</option>';
            }} ?>
          </select>
        </td>
        <td width="1%"></td>
        <td width="4%">Type</td>
        <td width="12%">
          <select class="form-control select2" name="st" onchange="this.form.submit()">
            <option value="">-- Select --</option>
            <option value="Customer"
            <?php 
            if('Customer'==$this->input->get('st')){
              echo 'selected="selected"';
            } 
            ?> 
            >
            Customer
            </option>
            <option value="Dealer"
            <?php 
            if('Dealer'==$this->input->get('st')){
              echo 'selected="selected"';
            } 
            ?> 
            >
            Dealer
            </option>
          </select>
        </td>
        <td width="1%"></td>
        <td width="3%">City</td>
        <td width="10%">
          <select class="form-control select2" name="ct" onchange="this.form.submit()">
            <?php echo '<option value=""> - All - </option>';
            if (!empty($cities)) { 
              foreach ($cities as $city) {
              echo '<option value="'.$city->m_city_id.'"';
              if($city->m_city_id == $this->input->get('ct')) echo ' selected';
              echo '>'.$city->m_city_name.'</option>';
            }} ?>
          </select>
        </td>
        <td width="1%"></td>
        <td width="12%">
          <input type="date" class="filter-input" name="fd" style="max-width: 125px;" value="<?php echo $this->input->get('fd');?>">
        </td>
        <td width="1%">to</td>
        <td width="12%">
          <input type="date" class="filter-input" name="td" style="max-width: 125px;" value="<?php echo $this->input->get('td');?>">
        </td>
        <td width="1%"></td>
        <td width="3%">
          <button type="submit" class="btn btn-block btn-info btn-vsm">Go</button>
        </td>
        <td width="2%"></td>
        <td width="5%">
          <a href="<?php echo site_url('Jobs'); ?>"><button type="button" class="btn btn-block btn-success btn-vsm">Reset</button></a>
        </td>
      </tr>
    </tbody>
  </table>
</form>
    </div>
  </div>
 <div class="col-md-12">
    <div class="page-box">
      <div style="overflow-x: scroll;">
      <div class="advance-table">
        <table id="listing_tbl" class="my_custom_datatable table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%" title="Serial Number">S.No.</th>
              <th title="Title">Job No</th>
              <th title="Mobile Number">Name</th>
              <th title="Type">Mobile</th>
              <th title="Category">Brand</th>
              <th title="City">Model</th>
              <th title="Owner">City</th>
              <th title="Added On">Updated On</th>
              <th width="10%" title="Status">Status</th>
              <th width="8%" title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
<?php if (!empty($jobs)) { 
  $dtl_link = site_url('Jobs/details?id=');
  $i = 0;
  foreach ($jobs as $job) {
    
    $re_btn = ''; $go_btn = ''; $pe_btn = ''; 
    if ($job->t_job_status == 1) {   //Active
      $btn_title = 'Running';
      $btn_class= 'info';
      $re_btn = 'disabled';
    }elseif($job->t_job_status == 2){ // Block
      $btn_title = 'Delivered';
      $btn_class= 'success';
      $go_btn = 'disabled';
    }else{                               // Pending =0
      $btn_title = 'Pending';
      $btn_class= 'warning';
      $pe_btn = 'disabled';
    }

?>
<tr>
  <td title="Serial Number"><?php echo $i+1; ?></td>
  <td title="Title"><?php echo $job->t_job_no; ?></td>
  <td title="Mobile Number"><?php echo $job->t_job_name;?></td>
  <td title="Category"><?php echo $job->t_job_contact; ?></td>
  <td title="City"><?php echo $job->m_brand_name; ?></td>
  <td title="Owner"><?php echo $job->m_model_name; ?></td>
  <td title="Added On"><?php echo $job->m_city_name; ?></td>
  <td title="Type"><?php echo date('d-m-Y h:i A',strtotime($job->t_job_updated_on)); ?></td>
  <td title="Status"><?php 
    echo "<div class='dropdown'>
      <button class='btn btn-".$btn_class." btn-block' type='button'>
      ".$btn_title."
      </button>
    </div>"; 
  ?></td>
  <td title="Action" style="white-space: nowrap;">
    <a href="<?php echo $dtl_link.$job->t_job_id; ?>" class="btn btn-info btn-action" title="View" data-toggle="tooltip"><i class="fa fa-eye"></i></a> <button class="btn btn-danger btn-action delete-jobs" data-value="<?php echo $job->t_job_id; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
  </td>
</tr>
<?php } } ?>
          </tbody>
        </table>  
      </div>  
                                            </div>
    </div>
  </div>
</div>
<!-- View Counselor Area End -->
<!-- ====================/Page Content======================= -->

<!-- =========================View=================Fix======= -->
      <!-- End Widget Row -->
      </div>
    </div>
<!-- ========================/View=================Fix======= -->

<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer'); ?>
<!-- =======================/Footer================Fix======= -->

<!-- ========================Script========================== -->
<?php $this->view('js/listing_js'); $this->view('js/jobs_del_js'); $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->