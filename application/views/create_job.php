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
                <h3>Create Job</h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Jobs'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Jobs </a>
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
              <form method="post" action="#" id="frm-create-job">
                <div class="row">
                  <?php
                  $this->db->select('t_job_id,t_job_no');
                  $this->db->order_by('t_job_id','DESC');
                  $res = $this->db->get('arya_jobs_tbl')->result();
                  if(!empty($res)){
                    $job_no = $res[0]->t_job_no + 1;
                  }
                  else{
                    $job_no = '100001';
                  }
                  ?>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Job No</label>
                      <input type="text" name="job_no" id="job_no" class="form-control" readonly="" placeholder="Job No" value="<?php echo $job_no;?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Job From</label>
                      <br>
                      <div class="d-flex">

                      <div class="jbfrm d-flex">
                      <input type="radio" name="job_from" id="job_from" class="check_user" value="Customer" checked=""><span>Customer</span>
                      </div>

                      <div class="jbfrm d-flex">
                      <input type="radio" name="job_from" id="job_from" class="check_user" value="Dealer"><span>Dealer</span>
                      </div>

                      </div>

                      </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Job Date</label>
                      <input type="date" name="job_date" id="job_date" class="form-control" placeholder="Job Date" value="<?php echo date('Y-m-d') ?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Expected Date</label>
                      <input type="date" name="exp_date" id="exp_date" class="form-control" placeholder="Expected date" value="">
                    </div>
                  </div>
                </div>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <!-- <div id="mydealer">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="cust_name" id="cust_name" class="form-control" placeholder="Customer Name" autofocus="true" value="">
                      </div>
                    </div> -->
                    <div id="mycustomer">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="cust_name" id="cust_name" class="form-control" placeholder="Customer Name" autofocus="true" value="" required="">
                      </div>
                    </div>
                    <div id="mydealer" style="display:none">
                      <div class="form-group">
                        <label>Name</label>
                        <select name="cust_name" id="dealer_name" class="form-control select2" required="">
                        <option value="">--- Select Dealer ---</option>
                        <?php if(!empty($dealer)){ foreach($dealer as $del){ echo "<option value='".$del->m_dealer_id."'>".$del->m_dealer_name."</option>"; } } ?></select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" name="mob_no" id="mob_no" class="form-control" placeholder="Mobile No" value="" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>City</label>
                      <select name="cust_city" id="cust_city" class="form-control select2">
                        <option value="">--- Select City ---</option>
                        <?php if(!empty($cities)){ foreach($cities as $city){ echo "<option value='".$city->m_city_id."'>".$city->m_city_name."</option>"; } } ?></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="cust_email" id="cust_email" class="form-control" placeholder="Customer Email" value="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea name="job_address" id="job_address" class="form-control" value=""></textarea>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Brand Name</label>
                    <select name="job_brand" id="job_brand" class="form-control select2" required="">
                      <option value="">--- Select Brand ---</option>
                      <?php if(!empty($brands)){ foreach($brands as $brand){ echo "<option value='".$brand->m_brand_id."'>".$brand->m_brand_name."</option>"; } } ?></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Model Name</label>
                    <select name="job_model" id="job_model" class="form-control select2" required="">
                      <option value="">--- Select Model ---</option>
                      </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Serial No</label>
                    <input type="text" name="job_serial" id="job_serial" class="form-control" placeholder="Serial No" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Estimate</label>
                    <input type="number" name="job_estimate" id="job_estimate" class="form-control" placeholder="Job Estimate" value="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Job Remark</label>
                      <textarea name="job_remark" id="job_remark" class="form-control" value=""></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex space-around" style="padding: 0px 142px 0px 0px;">
                  <label>Accessories</label>
                  <?php
                  if(!empty($accessories)){
                    foreach ($accessories as $value) {
                    ?>
                      <input type="checkbox" name="job_accessory[]" id="job_accessory" value="<?php echo $value->m_accesory_id;?>">
                      <?php echo $value->m_accesory_name;?>
                    <?php
                    }
                  }
                  ?>
                 <!--  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Battery
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Optical Disk
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Bag
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex space-around">
                  <label>Current Status</label>
                  <?php
                  if(!empty($cur_status)){
                    foreach ($cur_status as $values) {
                    ?>
                      <input type="checkbox" name="job_currsratus[]" id="job_currsratus" value="<?php echo $values->m_job_curr_id;?>">
                      <?php echo $values->m_job_curr_name;?>
                    <?php
                    }
                  }
                  ?>
                 <!--  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Battery
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Optical Disk
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">Bag
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD
                  <input type="checkbox" name="job_accessory" id="job_accessory" value="">HDD -->
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-create-job" class="btn btn-block btn-info">Create Job</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Jobs'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/jobs_js'); ?>
<!-- =======================/Footer================Fix=======