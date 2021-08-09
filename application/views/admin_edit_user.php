<!--=========================View==============Fix========== -->
<!-- ========================Header==============Fix========= -->
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->
<!-- =========================View===============Fix========= -->
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
                <h3><?php echo $pagename;?></h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Administration'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Users </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style type="text/css">
    .d-flex {
      display: flex;
      align-items: center;
    }

    .jbfrm input[type=radio]{
      width: 27px;
    height: 17px;
    margin: 0px;
    background: none;
    box-shadow: none;
    transition: 0.5s;
    }

    .space-around {
      justify-content: space-around;
    }

    .space-around input[type=checkbox]{
      margin: 0px 0px 0px;
       transition: 0.5s;
       width: 20px;
       height: 18px;
    }

     .space-around input[type=checkbox]:focus { outline: none!important; transform: scale(1.2); } 

     

    .jbfrm input[type=radio]:focus { outline: none!important; transform: scale(1.2); } 

     .req{
      color:red;
    }
     </style> 
    
    <!-- End Breadcromb Row -->
    <!-- =====================/Page Title======================== -->
    <!-- =====================Page Content======================= -->
    <!-- View Counselor Area Start -->
    <div class="row">
      <div class="col-md-12">
        <div class="page-box">
          <div class="form-example">
            <div class="form-wrap top-label-exapmple form-layout-page">
              <form method="post" action="#" id="frm-update">
                <div class="row">
                  <input type="hidden" name="muser_id" value="<?php echo $a_value[0]->muser_id ?>">
                  <input type="hidden" name="mu_images" value="<?php echo $a_value[0]->mu_image ?>">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name <span class="req">*</span></label>
                      <input type="text" name="mu_name" id="mu_name" class="form-control"  placeholder="Name" required=""value="<?php echo $a_value[0]->mu_name;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="mu_email" id="mu_email" class="form-control"  placeholder="Email" required="" value="<?php echo $a_value[0]->mu_email;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Contact <span class="req">*</span></label>
                      <input type="number" name="mu_contact" id="mu_contact" class="form-control"  placeholder="Contact" required="" value="<?php echo $a_value[0]->mu_contact;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                   <!-- <div class="col-md-4">
                    <div class="form-group">
                      <label>Login ID</label>
                      <input type="text" name="mu_loginid" id="mu_loginid" class="form-control"  placeholder="Login ID" value="<?php echo $a_value[0]->mu_loginid;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="mu_password" id="mu_password" class="form-control"  placeholder="Password"value="<?php echo $a_value[0]->mu_password;?>">
                    </div>
                  </div> -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>User Type <span class="req">*</span></label>
                      <select name="mu_type" id="mu_type " class="form-control" title="Select User Type" required="">
                        <option value="">Select User Type</option>
                        <option value="1" <?php echo $a_value[0]->mu_type == 1?'selected':'' ?>>Board of Management </option>
                        <option value="2" <?php echo $a_value[0]->mu_type == 2?'selected':'' ?>>Faculty </option>
                        <option value="3" <?php echo $a_value[0]->mu_type == 3?'selected':'' ?>>Administrative Staff </option>
                        <option value="4" <?php echo $a_value[0]->mu_type == 4?'selected':'' ?>>School Committee </option>
                        <option value="5" <?php echo $a_value[0]->mu_type == 5?'selected':'' ?>>PTA</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Desgination</label>
                      <input type="text" name="mu_desgination" id="mu_desgination" class="form-control"  placeholder="Desgination" value="<?php echo $a_value[0]->mu_desgination;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Department</label>
                      <input type="text" name="mu_department" id="mu_department" class="form-control"  placeholder="Department" value="<?php echo $a_value[0]->mu_department;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Image(380px x 380px)</label>
                    <input type="file" name="mu_image" id="mu_image" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Join Date</label>
                      <input type="date" name="mu_joined_on" id="mu_joined_on" class="form-control" placeholder="Join Date" value="<?php echo date('Y-m-d') ?>" value="<?php echo $a_value[0]->mu_joined_on;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Order </label>
                      <input type="number" name="mu_order" id="mu_order" class="form-control"  placeholder="Order">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="mu_status" id="mu_status " class="form-control" title="Select Status">
                        <option value="1" <?php echo $a_value[0]->mu_status == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo $a_value[0]->mu_status == 0?'selected':'' ?>>In-active</option>
                      </select>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea name="mu_address" id="mu_address" class="form-control" value="" placeholder="Address"><?php echo $a_value[0]->mu_address;?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-update" class="btn btn-block btn-info">Update User</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Administration'); ?>" class="btn btn-block btn-danger">Cancel</a>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- View Counselor Area End -->
  <!-- ====================/Page Content======================= -->
  <!-- =========================View=================Fix======= -->
</div>
</div>
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer'); $this->view('js/adminis_js'); ?>
<!-- =======================/Footer================Fix=======