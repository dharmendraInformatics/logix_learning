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
              <a href="<?php echo site_url('Star_performer/add_star_performer') ?>" class="btn btn-info pull-right">Add Star Performer</a>
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
              <th title="Title">Performer Name</th>
              <th title="Title">Contact</th>
              <th title="Image">Image</th>
              <th title="Image">Description</th>
              <th title="Posted On">Added On</th>
              <th title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i=1;
          if(!empty($all_value)){
            foreach($all_value as $value){
              $edit_link = site_url('Star_performer/edit_star_performer?id=');
              if(!empty($value->performer_image)){
                $image_link = base_url('uploads/performer/').$value->performer_image;
              }
              else{
                $image_link = base_url('uploads/blank.jpg');
              }
            ?>
            <tr>
              <td title="Serial Number"><?php echo $i; ?></td>
              <td title="Title"><?php echo $value->performer_name; ?></td>
              <td title="Title"><?php echo $value->performer_contact; ?></td>
              <td title="PDF"><a href="<?php echo $image_link;?>" class="btn btn-info" target="_blank"><i class="fa fa-picture-o"></i> Image</a></td>
              <td title="Description">
                <input type="hidden" id="performer_desc<?php echo $value->performer_id;?>" value="<?php echo $value->performer_desc;?>">
                <button class="btn btn-info" onclick="viewDetails(<?php echo $value->performer_id;?>)"><i class="fa fa-eye"></i> Description</button>
              </td>
              <td title="Title"><?php echo date('d-m-Y',strtotime($value->performer_added)); ?></td>
              <td title="" style="white-space: nowrap;">
                <a href="<?php echo $edit_link.$value->performer_id ; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
                <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->performer_id ; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id ="mymodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Star Performer Description</h4>
          </div>
          <!-- <form class="formdata" id="formdata" novalidate="" method= "post" action="<?php echo base_url('Corporate/reply_msg');?>"> -->
              <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="col-form-label" style="float:left;">Description:</label>
                    <textarea class="form-control" id="star_descr" name ="news_descr" style="height: 140px !important;"></textarea>
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
<?php $this->view('js/star_performer_js');  $this->view('js/custom_js'); ?>
<!-- ========================Script========================== -->