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
             <div class="seipkon-breadcromb-right"><a href="<?php echo site_url('Document/add_project'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> प्रोजेक्ट जोडे
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
              <th width="5%">क्रमांक</th>
              <th width="15%" title="क्रमांक">प्रोजेक्ट नाम</th>
              <th width="10%" title="वार्ड नंबर">प्रोजेक्ट कोड</th>
              <th title="वार्ड का नाम">प्रोजेक्ट इंजीनियर</th>
              <th>एक्सन</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            foreach($all_value as $value){
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $value->m_project_name; ?></td>
              <td><?php echo $value->m_project_code; ?></td>
              <td><?php echo $value->m_project_engineer; ?></td>
                <td title="" style="white-space: nowrap;">
                  <a href="<?php echo base_url('Document/edit_project?project_id=').$value->m_project_id  ?>" class="btn btn-primary btn-action" title="ऐडिट करें" data-toggle="tooltip"><i class="fa fa-edit"></i></a>

                  

                  <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->m_project_id ; ?>" title="डीलिट करें" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
<?php $this->view('js/project_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->