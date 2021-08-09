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
                <h3>Edit Dealer</h3>
             </div>
          </div>
          <div class="col-md-3 col-sm-3 pull-right">
            <div class="seipkon-breadcromb-right">
              <a href="<?php echo site_url('Master/dealer_add'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> List </a>
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
              <th title="Title">Name</th>
              <th title="Title">Contact</th>
              <th title="Title">Email</th>
              <th width="8%" title="Action">Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
            <?php
            $i=1;
            if(!empty($dealer)){
              foreach ($dealer as $value){
              ?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $value->m_dealer_name?></td>
                <td><?php echo $value->m_dealer_contact?></td>
                <td><?php echo $value->m_dealer_email?></td>
                <td title="Action" style="white-space: nowrap;">
                  <a href="<?php echo base_url('Master/dealer_edit/').$value->m_dealer_id;?>" class="btn btn-info btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>

                  <button class="btn btn-danger btn-action delete-dealer" data-value="<?php echo $value->m_dealer_id; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
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
                  <label>Name</label>
                  <input type="hidden" name="m_dealer_id" value="<?php echo $edit_dealer[0]->m_dealer_id;?>">
                  <input type="text" name="m_dealer_name" id="m_dealer_name" class="form-control" placeholder="Name" value="<?php echo $edit_dealer[0]->m_dealer_name;?>" autofocus="true">
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="number" name="m_dealer_contact" id="m_dealer_contact" class="form-control" placeholder="Contact" value="<?php echo $edit_dealer[0]->m_dealer_contact;?>" autofocus="true">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="m_dealer_email" id="m_dealer_email" class="form-control" placeholder="Email" value="<?php echo $edit_dealer[0]->m_dealer_email;?>" autofocus="true">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select name="m_dealer_city" id="m_dealer_city" class="form-control select2">
                    <option value="">--- Select City ---</option>
                    <?php
                    if(!empty($city)){
                      foreach($city as $ct){
                      ?>
                      <option value="<?php echo $ct->m_city_id;?>"
                        <?php 
                        if($edit_dealer[0]->m_dealer_city==$ct->m_city_id){
                            echo 'selected="selected"'; 
                          } 
                          ?> 
                      >
                      <?php echo $ct->m_city_name;?>
                      </option>
                      <?php
                      }
                    }
                  ?>
                </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Address" name="m_dealer_address" id="m_dealer_address"><?php echo $edit_dealer[0]->m_dealer_address;?></textarea>
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
                  <a href="<?php echo site_url('Master/dealer_add') ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('js/dealer_js') ?>
<!-- ========================Script========================== -->