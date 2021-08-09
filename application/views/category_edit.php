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
          <div class="col-md-6  col-sm-6">
             <div class="seipkon-breadcromb-left">
                <h3>Edit Category</h3>
             </div>
          </div>
          <div class="col-md-3 col-sm-3 pull-right">
            <div class="seipkon-breadcromb-right">
              <a href="<?php echo site_url('Category'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> List </a>
              <a href="<?php echo site_url('Category/add_new') ?>" class="btn btn-success btn-vsm"><i class="fa fa-plus"></i> Add New </a>
            </div>
          </div>
       </div>
    </div>
  </div>
</div>
<!-- End Breadcromb Row -->
<!-- =====================/Page Title======================== -->

<!-- =====================Page Content======================= -->
<!-- Add Product Area Start -->
<div class="row">
  <div class="col-md-12">
    <div class="page-box">
      <div class="form-example">
        <div class="form-wrap top-label-exapmple form-layout-page">
<form method="post" action="#" id="frm-update-category">
  <input type="hidden" name="m_category_id" value="<?php echo $a_value[0]->m_category_id; ?>">
          <div class="row">
            <div class="col-md-4">

              <div class="form-group">
                <label>Category Title</label>
  <input type="text" name="m_category_title" id="m_category_title" class="form-control" placeholder="Enter Category Title" value="<?php echo $a_value[0]->m_category_title; ?>" autofocus="true">
              </div>

            </div>
            <div class="col-md-4">

              <div class="form-group">
                <label>Order</label>
  <input type="number" min="0" name="m_category_order" id="m_category_order" class="form-control" placeholder="Enter Order" value="<?php echo $a_value[0]->m_category_order; ?>">
              </div>

            </div>
            <div class="col-md-4">

              <div class="form-group">
                <label>Category Status</label>
  <select name="m_category_status" id="m_category_status" class="form-control" title="Select Category Status">
    <option value="0" <?php if($a_value[0]->m_category_status != 1) echo "selected"; ?>>In-active</option>
    <option value="1" <?php if($a_value[0]->m_category_status == 1) echo "selected"; ?>>Active</option>
  </select>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <label>Icon</label>
  <input type="hidden" name="m_category_picon" value="<?php echo $a_value[0]->m_category_icon; ?>">
  <br><div class="product-upload btn btn-info btn-block" title="Select File">
    <p style="padding-top: 3px; padding-bottom: 3px;">
      <i class="fas fa-file-upload"></i>
      Select File
    </p>
    <input type="file" name="m_category_icon" id="m_category_icon" onchange="ImageAction(this);">
  </div>
            </div>
            <div class="col-md-4">
                <label>Image</label>
  <input type="hidden" name="m_category_pimage" value="<?php echo $a_value[0]->m_category_image; ?>">
  <br><div class="product-upload btn btn-info btn-block" title="Select File">
    <p style="padding-top: 3px; padding-bottom: 3px;">
      <i class="fas fa-file-upload"></i>
      Select File
    </p>
    <input type="file" name="m_category_image" id="m_category_image" onchange="ImageAction(this);">
  </div>

            </div>
            <div class="col-md-4">
                <label>Banner</label>
  <input type="hidden" name="m_category_pbanner" value="<?php echo $a_value[0]->m_category_banner; ?>">
  <br><div class="product-upload btn btn-info btn-block" title="Select File">
    <p style="padding-top: 3px; padding-bottom: 3px;">
      <i class="fas fa-file-upload"></i>
      Select File
    </p>
    <input type="file" name="m_category_banner" id="m_category_banner" onchange="ImageAction(this);">
  </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-8">

              <div class="form-group">
                <label> Category Description</label>
   <textarea class="form-control" name="m_category_desc" id="m_category_desc" placeholder="Enter Category Description"><?php echo $a_value[0]->m_category_desc; ?></textarea>
              </div>

            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="row">
            <div class="col-md-6">

              <div class="form-layout-submit">
<button type="submit" id="btn-update-category" class="btn btn-block btn-info">Update</button>
              </div>

            </div>
            <div class="col-md-6">

              <div class="form-layout-submit">
                <a href="<?php echo site_url('Category') ?>" class="btn btn-block btn-danger">Cancel</a>
              </div>

            </div>
          </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Advance Form Row -->
<!-- ====================/Page Content======================= -->

<!-- =========================View=================Fix======= -->
      <!-- End Widget Row -->
      </div>
    </div>
<!-- ========================/View=================Fix======= -->

<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer') ?>
<!-- =======================/Footer================Fix======= -->

<!-- ========================Script========================== -->
<?php $this->view('js/category_js') ?>
<!-- ========================Script========================== -->