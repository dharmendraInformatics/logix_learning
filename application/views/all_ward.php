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
            <div class="col-md-6 col-sm-6">
             <div class="seipkon-breadcromb-right"><a href="<?php echo site_url('Document/add_ward'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> वार्ड नंबर जोडे
               </a>
              </div>
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
              <th width="5%" title="वार्ड नंबर">वार्ड नंबर</th>
              <th title="वार्ड का नाम">वार्ड का नाम</th>
              <th title="ग्राम नाम">ग्राम का नाम</th>
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
              <td><?php echo $value->m_ward_no; ?></td>
              <td><?php echo $value->m_ward_name; ?></td>
              <td><?php echo $value->m_ward_gram_name; ?></td>
                <td title="" style="white-space: nowrap;">
                  <a href="<?php echo base_url('Document/edit_ward?ward_id=').$value->m_ward_id  ?>" class="btn btn-primary btn-action" title="ऐडिट करें" data-toggle="tooltip"><i class="fa fa-edit"></i></a>

                  

                  <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->m_ward_id ; ?>" title="डीलिट करें" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
<?php $this->view('js/aavas_yojna_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->