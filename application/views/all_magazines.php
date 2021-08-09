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
                <h3><?php echo $pagename?></h3>
              </div>
            </div>
            <div class="col-md-10 col-sm-10">
              <a href="<?php echo site_url('Magazines/add_magazines') ?>" class="btn btn-info pull-right">Add Magazine</a>
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
        <table id="magazines_tbl" class="my_custom_datatable table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%" title="Serial Number">S.No.</th>
              <th title="Title">Title</th>
              <th title="Author">Author</th>
              <th title="Posted Date">Posted Date</th>
              <th title="Posted Date">Location</th>
              <th title="Image">Document</th>
              <th title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            $edit_link = site_url('Magazines/edit_magazines?id=');
            foreach($all_value as $value){
              $btn_status = ($value->magazines_status   == 1) ? '<button type="button" class="btn btn-info btn-block btn-vsm" data-status="0">Active</button>' : '<button type="button" class="btn btn-danger btn-block btn-vsm" data-status="1">In-active</button>';
              if(!empty($value->magazines_image)){
                $image_link = base_url('uploads/magazines/').$value->magazines_image;
              }
              else{
                $image_link = base_url('uploads/blank.jpg');
              }
            ?>
            <tr>
              <td title="Serial Number"><?php echo $i; ?></td>
              <td title="Title"><?php echo $value->magazines_title; ?></td>
              <td title="Author"><?php echo $value->magazines_author; ?></td>
              <td title="Posted"><?php echo date('d-m-Y',strtotime($value->magazines_postdate));?></td>
              <td title="Author"><?php echo $value->magazines_location; ?></td>
               <td title="Image"><a href="<?php echo $image_link;?>" class="btn btn-info" target="_blank"><i class="fa fa-picture-o"></i> Document</a>
                </td>
               <!-- <td><span class="change-status" title='Click Here to Change Status' data-cgid="<?php echo $value->magazines_id ; ?>"><?php //echo $btn_status; ?></span></td> -->
                <td title="विकल्प" style="white-space: nowrap;">
                <a href="<?php echo $edit_link.$value->magazines_id ; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> <button class="btn btn-danger btn-action delete-magazines" data-value="<?php echo $value->magazines_id ; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
<?php $this->view('js/magazines_js'); $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->