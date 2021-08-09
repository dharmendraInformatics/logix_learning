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
<style>
  .mar-10{
    margin-left: 10px;
  }
</style>
<!-- ======================Page Style======================== -->

<!-- ======================Page Title======================== -->
<!-- Breadcromb Row Start -->
<div class="row">
   <div class="col-md-12">
      <div class="breadcromb-area">
         <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="seipkon-breadcromb-left">
                <h3><?php echo $pagename?></h3>
              </div>
            </div>
            <div class="col-md-4 col-sm-4"> 
              <button class="btn btn-success pull-right mar-10">प्रिंट नहीं हुआ हैं</button>
              <button class="btn btn-warning pull-right">प्रिंट हुआ हैं</button> &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-md-4 col-sm-4">
              <a href="<?php echo site_url('Document/add_aavas_yojna_application') ?>" class="btn btn-info pull-right"><i class="fa fa-list-alt"></i> आवेदन जोडे</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Breadcromb Row -->
<!-- =====================/Page Title======================== -->
<!-- =====================Page Content======================= -->
<!-- View Counselor Area Start -->
<div class="row">
 <div class="col-md-12">
    <div class="page-box">
      <div style="overflow-x: scroll;">
      <div class="advance-table">
        <table id="my_tbl" class="my_custom_datatable table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%" title="क्रमांक">क्रमांक</th>
              <th title="हितग्राही का नाम">हितग्राही का नाम</th>
              <th title="हितग्राही का नाम">पिता / पति का नाम</th>
              <th title="आधार क्रमांक">आधार क्रमांक</th>
              <th title="CSMC">CSMC</th>
              <th>एक्सन</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            //$edit_link = site_url('Administration/edit_user?id=');
            //$view_link = site_url('Administration/user_details?id=');
            foreach($all_value as $value){
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $value->m_name_hindi; ?></td>
              <td><?php echo $value->m_father_husb_name_hindi; ?></td>
              <td><?php echo $value->m_adhar_no; ?></td>
              <td><?php echo $value->m_csmc; ?></td>
                <td title="" style="white-space: nowrap;">
                  <a href="<?php echo base_url('Document/aavas_yojna_applicant_details?app_id=').$value->m_app_id?>" class="btn btn-info btn-action" title="प्रमाण पत्र सभी विवरण" data-toggle="tooltip" target="_blank"><i class="fa fa-eye"></i></a>
                  <?php
                  if($value->m_is_print==1){
                  ?>
                    <button type="button" class="btn btn-warning btn-action" title="प्रिंट प्रमाण पत्र" data-toggle="tooltip" onclick="printApplication(<?php echo $value->m_app_id;?>)"><i class="fa fa-print"></i></button> |
                  <?php
                  }
                  else{
                  ?>
                    <button type="button" class="btn btn-success btn-action" title="प्रिंट प्रमाण पत्र" data-toggle="tooltip" onclick="printApplication(<?php echo $value->m_app_id;?>)"><i class="fa fa-print"></i></button> |
                  <?php
                  }
                  ?>

                  <a href="<?php echo base_url('Document/aavas_bhavan_anuggya_details?app_id=').$value->m_app_id?>" class="btn btn-info btn-action" title="भवन अनुज्ञा सभी विवरण" data-toggle="tooltip" target="_blank"><i class="fa fa-eye"></i></a>
                  <?php
                  if($value->m_is_bulding_print==1){
                  ?>
                    <button type="button" class="btn btn-warning btn-action" title="प्रिंट भवन अनुज्ञा" data-toggle="tooltip" onclick="printbuildingApplication(<?php echo $value->m_app_id;?>)"><i class="fa fa-print"></i></button> |
                  <?php
                  }
                  else{
                  ?>
                    <button type="button" class="btn btn-success btn-action" title="प्रिंट भवन अनुज्ञा" data-toggle="tooltip" onclick="printbuildingApplication(<?php echo $value->m_app_id;?>)"><i class="fa fa-print"></i></button> |
                  <?php
                  }
                  if($this->session->userdata('user_type')=='admin'){ 
                  ?>
                    <!-- <a href="<?php //echo base_url('Document/aavas_yojna_applicant_details?app_id=').$value->m_app_id?>" class="btn btn-primary btn-action" title="ऐडिट करें" data-toggle="tooltip"><i class="fa fa-edit"></i></a> -->
                    <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->m_app_id ; ?>" title="डीलिट करें" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
                  <?php
                  }
                  ?>
                </td>
            </tr>
            <?php
            $i++;
            }
          }
          ?>
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
<?php $this->view('js/import_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->