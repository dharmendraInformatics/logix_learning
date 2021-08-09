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
              <a href="<?php echo site_url('Enquiries') ?>" class="btn btn-info pull-right">Enquiries</a>
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
              <th title="Name">Name</th>
              <th title="Email">Email</th>
              <th title="Subject">Subject</th>
              <th title="Message">Message</th>
              <th title="Date">Date</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            foreach($all_value as $value){
            ?>
            <tr>
              <td title="Serial Number"><?php echo $i; ?></td>
              <td title="Title"><?php echo $value->contact_name; ?></td>
              <td title="Title"><?php echo $value->contact_email; ?></td>
              <td title="Title"><?php echo $value->contact_subject; ?></td>
              <td title="Message">
                <input type="hidden" id="contact_messgae<?php echo $value->contact_id;?>" value="<?php echo $value->contact_messgae;?>">
                <button class="btn btn-info" onclick="viewDetails(<?php echo $value->contact_id;?>)"><i class="fa fa-commenting-o"></i> Message</button>
              </td>
              <td title="Title"><?php echo date('d-m-Y',strtotime($value->contact_date)); ?></td>
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
<div class="modal fade" id ="mymodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Enquiries Message</h4>
          </div>
          <!-- <form class="formdata" id="formdata" novalidate="" method= "post" action="<?php echo base_url('Corporate/reply_msg');?>"> -->
              <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="col-form-label" style="float:left;">Message:</label>
                    <textarea class="form-control" id="contact_msg" name ="contact_msg" style="height: 140px !important;"></textarea>
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
<?php $this->view('js/enquiries_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->