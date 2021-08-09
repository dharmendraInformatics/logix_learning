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
            <div class="col-md-6 col-sm-6">
              <div class="seipkon-breadcromb-left">
                <h3><?php echo $pagename?></h3>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <!-- <a href="<?php echo site_url('Document/add_aavas_yojna_application') ?>" class="btn btn-info pull-right"><i class="fa fa-list-alt"></i> आवेदन जोडे</a> -->
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
<?php $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->