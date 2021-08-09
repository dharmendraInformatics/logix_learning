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
                <h3>Add New City</h3>
             </div>
          </div>
          <div class="col-md-3 col-sm-3 pull-right">
            <div class="seipkon-breadcromb-right">
              <a href="<?php echo site_url('Master/brand_add'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> List </a>
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
  <div class="col-md-8">
    <div class="page-box">
      <div class="advance-table">
        <table id="listing_tbl" class="my_custom_datatable table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%" title="Serial Number">S.No.</th>
              <th title="Title">City</th>
              <th width="8%" title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
            <?php
            $i=1;
            if(!empty($city)){
              foreach ($city as $value){
              ?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $value->m_city_name?></td>
                <td title="Action" style="white-space: nowrap;">
                  <a href="<?php echo base_url('Master/city_edit/').$value->m_city_id;?>" class="btn btn-info btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>

                  <button class="btn btn-danger btn-action delete-city" data-value="<?php echo $value->m_city_id; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
  <div class="col-md-4">
    <div class="page-box">
      <div class="form-example">
        <div class="form-wrap top-label-exapmple form-layout-page">
          <form method="post" action="#" id="frm-update">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>City Name</label>
                  <input type="hidden" name="m_city_id" value="<?php echo $edit_city[0]->m_city_id;?>">
                  <input type="text" name="m_city_name" id="m_city_name" class="form-control" placeholder="City Name" value="<?php echo $edit_city[0]->m_city_name;?>" autofocus="true">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-update" class="btn btn-block btn-info">Update</button>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-layout-submit">
                  <a href="<?php echo site_url('Master/city_add') ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('js/city_js') ?>
<!-- ========================Script========================== -->