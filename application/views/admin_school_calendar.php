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
              <a href="<?php echo site_url('School_Calendar/add_school_calendar') ?>" class="btn btn-info pull-right">Add School Calendar</a>
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
              <th title="Date">Date</th>
              <th title="PDF">PDF</th>
              <th title="Description">Description</th>
              <th title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            foreach($all_value as $value){
              $edit_link = site_url('School_Calendar/edit_school_calendar?id=');
              
              if(!empty($value->m_cal_pdf)){
                $image_link = base_url('uploads/calendar/').$value->m_cal_pdf;
              }
              else{
                $image_link = base_url('uploads/blank');
              }
            ?>
            <tr>
              <td title="Serial Number"><?php echo $i; ?></td>
              <td title="Title"><?php echo $value->m_cal_title; ?></td>
              <td title="Date"><?php echo date('d-m-Y',strtotime($value->m_cal_date));?></td>
              <td title="PDF"><a href="<?php echo $image_link;?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-pdf-o"></i> PDF</a></td>
              <td title="Description">
                <input type="hidden" id="m_cal_desc<?php echo $value->m_cal_id;?>" value="<?php echo $value->m_cal_desc;?>">
                <button class="btn btn-info" onclick="viewDetails(<?php echo $value->m_cal_id;?>)"><i class="fa fa-eye"></i> Description</button>
              </td>
              <td title="" style="white-space: nowrap;">
              <a href="<?php echo $edit_link.$value->m_cal_id ; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
              <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->m_cal_id ; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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

<!--Modal-->   
    <div class="modal fade" id ="mymodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Calendar Description</h4>
          </div>
          <!-- <form class="formdata" id="formdata" novalidate="" method= "post" action="<?php echo base_url('Corporate/reply_msg');?>"> -->
              <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="col-form-label" style="float:left;">Description:</label>
                    <textarea class="form-control" id="calendar_desc" name ="calendar_desc" style="height: 140px !important;"></textarea>
                </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-sm color2-bg"data-dismiss="modal" >Close<i class="fas fa-times"></i></button>
                <button type="button" class="btn btn-sm color2-bg" onclick="replyMsg();">Reply<i class="fas fa-reply"></i></button>
              </div> -->
          <!-- </form> -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
<!-- ========================/View=================Fix======= -->

<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer'); ?>
<!-- =======================/Footer================Fix======= -->

<!-- ========================Script========================== -->
<?php $this->view('js/school_calendar_js'); $this->view('js/custom_js');?>
<!-- ========================Script========================== -->