<!-- =========================View==============Fix========== -->

<!-- ========================Header==============Fix========= --> 
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->

<!-- =========================View===============Fix========= -->
  <!-- Right Side Content Start -->
    <div class="page-content">
      <div class="container-fluid">
<!-- ========================/View===============Fix========= -->

<!-- ======================Page Title======================== -->
<!-- Breadcromb Row Start -->
<div class="row">
   <div class="col-md-12">
      <div class="breadcromb-area">
         <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="seipkon-breadcromb-left">
                <h3>Categories List</h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              <div class="seipkon-breadcromb-right">
                <a href="<?php echo site_url('Category/add_new') ?>" class="btn btn-info btn-vsm"><i class="fa fa-plus"></i> Add New Category</a>
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
        <table id="category_tbl" class="my_custom_datatable table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%" title="Serial Number">S.No.</th>
              <th title="Category">Category</th>
              <th title="Order">Order</th>
              <th width="12%" title="Show : Icon Image Banner">Show</th>
              <th title="Description">Description</th>
              <th title="Clicks">Clicks</th>
              <th title="Listings">Listings</th>
              <th width="10%" title="Status">Status</th>
              <th width="8%" title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
<?php if (!empty($all_value)) { 
  $edit_link = site_url('Category/edit?id=');
  foreach ($all_value as $i => $vl) {
    $btn_status = ($vl->m_category_status == 1) ? '<button type="button" class="btn btn-info btn-block btn-vsm" data-status="0" title="Click here to Change Status">Active</button>' : '<button type="button" class="btn btn-danger btn-block btn-vsm" data-status="1" title="Click here to Change Status">In-active</button>';
?>
<tr data-file="<?php echo $vl->m_category_icon; ?>"
    data-file2="<?php echo $vl->m_category_image; ?>"
    data-file3="<?php echo $vl->m_category_banner; ?>"
>
  <td title="Serial Number"><?php echo $i+1; ?></td>
  <td title="Category"><?php echo $vl->m_category_title; ?></td>
  <td title="Order"><?php echo $vl->m_category_order; ?></td>
  <td><button class="btn btn-primary btn-action show-file-btn" title="Icon" data-toggle="tooltip"><i class="fa fa-eye"></i></button> <button class="btn btn-primary btn-action show-file2-btn" title="Image" data-toggle="tooltip"><i class="fa fa-eye"></i></button> <button class="btn btn-primary btn-action show-file3-btn" title="Banner" data-toggle="tooltip"><i class="fa fa-eye"></i></button></td>
  <td title="Description" data-desc="<?php echo $vl->m_category_desc; ?>"><button class="btn btn-warning show-desc-btn btn-vsm" title="Description" data-toggle="tooltip"><i class="fa fa-eye"></i> Description</button></td>
  <td title="Clicks"><?php echo $vl->m_category_clicks; ?></td>
  <td title="Listings"><?php echo $vl->m_category_listings; ?></td>
  <td><span class="change-status" data-cgid="<?php echo $vl->m_category_id; ?>"><?php echo $btn_status; ?></span></td>
  <td title="Action" style="white-space: nowrap;">
    <a href="<?php echo $edit_link.$vl->m_category_id; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> <button class="btn btn-danger btn-action delete-category" data-value="<?php echo $vl->m_category_id; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
  </td>
</tr>
<?php } } ?>
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

<!-- =========================Modal========================== -->
<!-- Modal -->
<div class="modal fade" id="mediaModal" role="dialog">
  <div class="modal-dialog modal-sm">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Icon</h4>
      </div>
      <div class="modal-body" id="mideaBody"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
<!-- ========================/Modal========================== -->

<!-- =========================Modal========================== -->
<!-- Modal -->
<div class="modal fade" id="mediaModal2" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Image</h4>
      </div>
      <div class="modal-body" id="mideaBody2"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
<!-- ========================/Modal========================== -->

<!-- =========================Modal========================== -->
<!-- Modal -->
<div class="modal fade" id="mediaModal3" role="dialog">
  <div class="modal-dialog modal-lg">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Banner</h4>
      </div>
      <div class="modal-body" id="mideaBody3"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
<!-- ========================/Modal========================== -->

<!-- =========================Modal========================== -->
<!-- Modal -->
<div class="modal fade" id="mediaModal4" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Description</h4>
      </div>
      <div class="modal-body" id="mideaBody4"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
<!-- ========================/Modal========================== -->

<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer'); ?>
<!-- =======================/Footer================Fix======= -->

<!-- ========================Script========================== -->
<?php $this->view('js/category_js'); $this->view('js/custom_js'); ?>
<!-- ========================Script==========================