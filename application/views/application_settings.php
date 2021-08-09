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
            <div class="col-md-6 col-sm-6">
              <div class="seipkon-breadcromb-left">
                <h3><?php echo $pagename?></h3>
              </div>
            </div>
            <!-- <div class="col-md-6 col-sm-6">
              <a href="<?php echo site_url('Profile/application_settings') ?>" class="btn btn-info pull-right">Application Settings</a>
            </div> -->
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
      <div>
      <form method="POST" action="#" id="frm-update">
        <div class="row">
       
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Application Name <span class="text-danger">*</span></label>
              <input value="<?php echo get_settings('app_name') ?>" type="text" required placeholder="App Name" class="form-control" name="app_name" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Application Title</label>
              <input value="<?php echo get_settings('app_title') ?>" type="text" name="app_title" placeholder="App Title" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Application Mail</label>
              <input value="<?php echo get_settings('app_email') ?>" type="text" name="app_email" placeholder="App Mail" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Application Contact</label>
              <input value="<?php echo get_settings('app_mobile') ?>" type="text" name="app_mobile" placeholder="App Contact" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Application Address</label>
              <textarea name="app_address" class="form-control"><?php echo get_settings('app_address') ?></textarea>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-md-4" style="border: 2px solid #f1f2f4;height: 200px;">
            <div class="form-group">
              <?php
                if(!empty(get_settings('app_logo')) && file_exists('../img/'.get_settings('app_logo')))
                 {
                   $applogo = base_url('../img/'.get_settings('app_logo'));
                 }else{
                    $applogo = base_url('uploads/blank.jpg');
                 }
                 ?>
              <img style="max-height:120px" src="<?php echo $applogo ?>" class="img-responsive img-thumbnail"/>
              <br>
              <label class="control-label">Application Logo</label>
              <input type="hidden" name="applogo" value="<?php echo get_settings('app_logo') ?>">
              <input type="file" name="app_logo" class="form-control">
            </div>
          </div>
          <div class="col-md-4" style="border: 2px solid #f1f2f4;height: 200px;">
            <div class="form-group">
              <?php
                if(!empty(get_settings('app_icon')) && file_exists('../img/'.get_settings('app_icon')))
                 {
                   $appfavi = base_url('../img/'.get_settings('app_icon'));
                 }else{
                    $appfavi = base_url('uploads/blank.jpg');
                 }
                 ?>
              <img style="max-height:50px" src="<?php echo $appfavi ?>" class="img-responsive img-thumbnail"/>
              <br>
              <label class="control-label">Application Favicon</label>
              <input type="hidden" name="appfavicon" value="<?php echo get_settings('app_icon') ?>">
              <input type="file" name="app_icon" class="form-control">
            </div>
          </div>
          <div class="col-md-4" style="border: 2px solid #f1f2f4;height: 200px;">
            <div class="form-group">
              <?php
                if(!empty(get_settings('app_banner')) && file_exists('../img/'.get_settings('app_banner')))
                 {
                   $appBanner = base_url('../img/'.get_settings('app_banner'));
                 }else{
                    $appBanner = base_url('uploads/blank.jpg');
                 }
                 ?>
              <img style="max-height:120px;width: 100%;" src="<?php echo $appBanner ?>" class="img-responsive img-thumbnail"/>
              <br>
              <label class="control-label">Application Banner</label>
              <input type="hidden" name="appbanner" value="<?php echo get_settings('app_banner') ?>">
              <input type="file" name="app_banner" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-layout-submit">
              <button type="submit" id="btn-update" class="btn btn-block btn-info">Update</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-layout-submit"> <a href="<?php echo site_url('Profile/application_settings'); ?>" class="btn btn-block btn-danger">Cancel</a>
            </div>
          </div>
        </div>
        </form>
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
<?php $this->view('js/app_settings_js');?>
<!-- ========================Script========================== -->