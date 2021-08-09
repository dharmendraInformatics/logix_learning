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
              <a href="<?php echo site_url('Events/add_events') ?>" class="btn btn-info pull-right">Add Event</a>
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
              <th width="5%" title="Serial Number">S.No.</th>
              <th title="Title">Title</th>
              <th title="Mobile Number">Location</th>
              <th title="Mobile Number">Image</th>
              <th title="Type">Event Date</th>
              <th title="Type">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            foreach($all_value as $value){
              $edit_link = site_url('Events/edit_events?id=');
              if(!empty($value->m_event_image)){
                $image_link = base_url('uploads/events/').$value->m_event_image;
              }
              else{
                $image_link = base_url('uploads/blank.jpg');
              }
            ?>
            <tr>
              <td title="Serial Number"><?php echo $i; ?></td>
              <td title="Title"><?php echo $value->m_event_title; ?></td>
              <td title="Category"><?php echo $value->m_event_location; ?></td>
              <td title="PDF"><a href="<?php echo $image_link;?>" class="btn btn-info" target="_blank"><i class="fa fa-picture-o"></i> Image</a></td>
              <td title="Mobile Number"><?php echo $value->m_event_date;?></td>
              <td title="" style="white-space: nowrap;">
                <a href="<?php echo $edit_link.$value->m_event_id ; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
                <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->m_event_id ; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
<?php $this->view('js/event_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->