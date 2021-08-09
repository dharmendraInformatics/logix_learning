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
  /* Carousel Styles */
  .carousel-indicators .active {
      background-color: #2980b9;
  }

  .carousel-inner img {
      width: 100%;
      max-height: 460px
  }

  .carousel-control {
      width: 0;
  }

  .carousel-control.left,
  .carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
  }

  .carousel-control.left span {
    padding: 15px;
  }

  .carousel-control.right span {
    padding: 15px;
  }

  .carousel-control .glyphicon-chevron-left, 
  .carousel-control .glyphicon-chevron-right, 
  .carousel-control .icon-prev, 
  .carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
  }

  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    left: 0;
  }

  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    right: 0;
  }

  .carousel-control.left span,
  .carousel-control.right span {
    background-color: #000;
  }

  .carousel-control.left span:hover,
  .carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
  }

  /* Carousel Header Styles */
  .header-text {
      position: absolute;
      top: 60%;
      left: 1.8%;
      right: auto;
      width: 96.66666666666666%;
      color: #fff;
      text-shadow: 0px 0px 6px black;
  }

  .header-text h2 {
      font-size: 40px;
  }

  .header-text h2 span {
      background-color: #2980b9;
    padding: 10px;
  }

  .header-text h3 span {
    background-color: #000;
    padding: 15px;
  }

  .btn-min-block {
      min-width: 170px;
      line-height: 26px;
  }

  .btn-theme {
      color: #fff;
      background-color: transparent;
      border: 2px solid #fff;
      margin-right: 15px;
  }

  .btn-theme:hover {
      color: #000;
      background-color: #fff;
      border-color: #fff;
      text-shadow: none;
  }



.review-score {
    background: #384F95;
    color: #fff;
    float: left;
    font-weight: 600;
    margin-right: 12px;
}
  .review-score {
    padding: 14px;
    font-size: 18px;
    border-radius: 100%;
}

.table tr th input[type=text], input[type=date], input[type=email] {
  border:none;
  width: 90%;
}


input[type="date"] {
  position: relative;
  width: 100%
  
}

input[type="date"]::-webkit-calendar-picker-indicator {
  color: transparent;
  background: none;
  z-index: 1;
}

input[type="date"]:before {
  color: transparent;
  background: none;
  display: block;
  font-family: 'FontAwesome';
  content: '\f073';
  /* This is the calendar icon in FontAwesome */
  width: 15px;
  height: 20px;
  position: absolute;
  top: 3px;
  right: 3px;
  color: lightgrey;

}





</style>
<!-- =====================/Page Style======================== -->

<!-- ======================Page Title======================== -->
<!-- Breadcromb Row Start -->
<div class="row">
   <div class="col-md-12">
      <div class="breadcromb-area">
         <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="seipkon-breadcromb-left">
                <h3>Job Details</h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              <div class="seipkon-breadcromb-right">
                <a target="_blank" href="<?php echo site_url('Jobs/jobcard_print?id=').$this->input->get('id'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-print"></i> Print Job </a>
                <a href="<?php echo site_url('Jobs'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Jobs </a>
                <!--a href="<?php echo site_url('Jobs/edit?id=').$job_details[0]->t_job_id; ?>" class="btn btn-success btn-vsm"><i class="fa fa-pencil"></i> Edit </a-->
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Breadcromb Row -->
<!-- =====================/Page Title======================== -->

<!-- =====================Page Content======================= -->

<div class="row">
  <div class="col-md-12">
    <form method="post" action="#" id="frm-update">
      <input type="hidden" name="t_job_id" id="t_job_id" value="<?php echo $this->input->get('id');?>">
      <div class="page-box">
        <div class="row">
          <div style="text-align: right; margin-right: 15px;">
            <button  id="btn-update" class="btn btn-success" title="Click Here"><i class="fa fa-pencil"></i> Edit </button>
          </div>
        </div>
        <div class="row">
           <div class="col-md-4">
              <h4 class="text-center">Job Details</h4>
          <table class="table table-bordered" style="margin-top: 10px">
            <tbody>
              <tr>
                <td>Job No</td>
                <th><input type="text" value="<?php echo $job_details[0]->t_job_no;?>" name="t_job_no"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr> 
              <tr>
                <td>Job Date</td>
                <th><input type="date" value="<?php echo $job_details[0]->t_job_date;?>" name="t_job_date"></th>
              </tr> 
              <tr>
                <td>Expected Delivery</td>
                <th><input type="date" value="<?php echo $job_details[0]->t_job_expected_date;?>" name="t_job_expected_date"></th>
              </tr> 
              <tr>
                <td>Brand Name</td>
                <th>
                  <!--input type="text" value="<?php echo $job_details[0]->m_brand_name;?>" name=""><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i-->
                  <select name="mm_brand_id" id="mm_brand_id" class="form-control select2">
                  <option value="">--- Select Brand ---</option>
                  <?php
                    if(!empty($brand)){
                      foreach($brand as $bdl){
                      ?>
                      <option value="<?php echo $bdl->m_brand_id;?>"
                        <?php 
                        if($job_details[0]->t_job_brand==$bdl->m_brand_id){
                            echo 'selected="selected"'; 
                          } 
                          ?> 
                      >
                      <?php echo $bdl->m_brand_name;?>
                      </option>
                      <?php
                      }
                    }
                  ?>
                  </select>
                </th>
              </tr> 
              <tr>
                <td>Model Name</td>
                <th>
                  <?php
                  $this->db->where('mm_brand_id',$job_details[0]->t_job_brand);
                  $models = $this->db->get('master_model_tbl')->result();
                  ?>
                  <!--input type="text" value="<?php echo $job_details[0]->m_model_name;?>" name=""><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i-->
                  <select name="mm_model_id" id="mm_model_id" class="form-control select2">
                  <!--option value="<?php //echo $job_details[0]->t_job_model;?>"><?php //echo $job_details[0]->m_model_name;?></option-->
                  <?php
                    if(!empty($models)){
                      foreach($models as $md){
                      ?>
                      <option value="<?php echo $md->m_model_id;?>"
                        <?php 
                        if($job_details[0]->t_job_model==$md->m_model_id){
                            echo 'selected="selected"'; 
                          } 
                          ?> 
                      >
                      <?php echo $md->m_model_name;?>
                      </option>
                      <?php
                      }
                    }
                  ?>
                  </select>
                </th>
              </tr>
              <tr>
                <td>Serial No</td>
                <th><input type="text" value="<?php echo $job_details[0]->t_job_serial_no;?>" name="t_job_serial_no"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr>  
            </tbody>
          </table>
           </div>
           <div class="col-md-4">
          <h4 class="text-center">Customer Details</h4>
          <table class="table table-bordered" style="margin-top: 10px">
            <tbody>
              <tr>
                <td>Name</td>
                <th><input type="text" value="<?php echo $job_details[0]->t_job_name;?>" name="t_job_name"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr> 
              <tr>
                <td>Mobile No</td>
                <th><input type="text" value="<?php echo $job_details[0]->t_job_contact;?>" name="t_job_contact"><i style="color: lightgrey;" title="Click Above Number For Edit" class="fa fa-pencil"></i></th>
              </tr> 
              <tr>
                <td>Email ID</td>
                <th><input type="email" value="<?php echo $job_details[0]->t_job_email;?>" name="t_job_email"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr> 
              <tr>
                <td>City</td>
                <th><input type="text" value="<?php echo $job_details[0]->m_city_name;?>" name=""><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr> 
              <tr>
                <td>Address</td>
                <th><input type="text" value="<?php echo $job_details[0]->t_job_address;?>" name="t_job_address"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-pencil"></i></th>
              </tr>
             
            </tbody>
          </table>
           </div>
          <div class="col-md-2">
            <h4 class="text-center">Accessories</h4>
              <table class="table table-bordered" style="margin-top: 10px">
                <tbody>
                  <?php
                  if(!empty($accessories)){
                    foreach($accessories as $acc){
                      $this->db->select('*');
                      $this->db->where('t_accesory_name',$acc->m_accesory_id);
                      $this->db->where('trans_job_id',$this->input->get('id'));
                      $results = $this->db->get('trans_job_accessories_tbl')->result_array();

                      if(!empty($results)){
                      ?> 
                      <tr>
                        <td><?php echo $acc->m_accesory_name;?></td>
                        <th><input type="checkbox" name="job_accessory[]" value="<?php echo $acc->m_accesory_id;?>" checked></th>
                      </tr>
                      <?php
                      }
                      else{
                      ?>
                      <tr>
                        <td><?php echo $acc->m_accesory_name;?></td>
                        <th><input type="checkbox" name="job_accessory[]" value="<?php echo $acc->m_accesory_id;?>"></th>
                      </tr>
                      <?php
                      }
                    }
                  }
                  ?>
                </tbody>
              </table>
          </div>
          <div class="col-md-2">
            <h4 class="text-center">Current Status</h4>
              <table class="table table-bordered" style="margin-top: 10px">
                <tbody>
                  <?php
                  if(!empty($cur_status)){
                    foreach($cur_status as $curr){
                      $this->db->select('*');
                      $this->db->where('t_job_curr_name',$curr->m_job_curr_id);
                      $this->db->where('trans_curr_job_id',$this->input->get('id'));
                      $results1 = $this->db->get('trans_job_cur_status_tbl')->result_array();

                      if(!empty($results1)){
                      ?> 
                      <tr>
                        <td><?php echo $curr->m_job_curr_name;?></td>
                        <th><input type="checkbox" name="job_currsratus[]" value="<?php echo $curr->m_job_curr_id;?>" checked></th>
                      </tr>
                      <?php
                      }
                      else{
                      ?>
                      <tr>
                        <td><?php echo $curr->m_job_curr_name;?></td>
                        <th><input type="checkbox" name="job_currsratus[]" value="<?php echo $curr->m_job_curr_id;?>"></th>
                      </tr>
                      <?php
                      }
                    }
                  }
                  ?>
                </tbody>
              </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Status</label>
            <select name="t_job_status" id="t_job_status" class="form-control" required="">
              <option value="1"
              <?php 
              if($job_details[0]->t_job_status==1){
                echo 'selected="selected"';
              } 
              ?> 
              >
              Running
              </option>
              <option value="2"
              <?php 
              if($job_details[0]->t_job_status==2){
                echo 'selected="selected"';
              } 
              ?> 
              >
              Delivered
              </option>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <h5>Opened Remark</h5>
            <h6>Opened By :</h6>
             <input type="text" name="t_job_opened_by" class="form-control mt-5" value="<?php echo $job_details[0]->t_job_opened_by;?>">
            <br>
            <textarea placeholder="Remark Here" class="form-control" name="t_job_opened_remark"><?php echo $job_details[0]->t_job_opened_remark;?></textarea>
          </div>
          <div class="col-md-3">
            <h5>Packed Remark</h5>
            <h6>Packed By : </h6>
             <input type="text" name="t_job_packed_by" class="form-control mt-5" value="<?php echo $job_details[0]->t_job_packed_by;?>">
            <br>
            <textarea placeholder="Remark Here" class="form-control" name="t_job_packed_remark"><?php echo $job_details[0]->t_job_packed_remark;?></textarea>
          </div>
          <div class="col-md-3">
            <h5>Repaired Remark</h5>
            <h6>Repaired By :</h6>
             <input type="text" name="t_job_repaired_by" class="form-control mt-5" value="<?php echo $job_details[0]->t_job_repaired_by;?>">
            <br>
            <textarea placeholder="Remark Here" class="form-control" name="t_job_repaired_remark"><?php echo $job_details[0]->t_job_repaired_remark;?></textarea>
          </div>
          <div class="col-md-3">
           
                <h5>Delivery Remark</h5>
                <h6>Delivered By:  </h6>
            <input type="text" name="t_job_delivered_by" class="form-control mt-5" value="<?php echo $job_details[0]->t_job_delivered_by;?>">
            <br>
            <textarea placeholder="Remark Here" class="form-control" name="t_job_eng_remark"><?php echo $job_details[0]->t_job_eng_remark;?></textarea>
            
            <!--  <div class="panel-body">
                 <p>f sf f asf fa sf as f asf a sf asf asf a sf asfasf a sf a sf asf a sf</p>

                 <h6 style="border-top: 2px solid red; padding:5px">Delivered By : <span class="pull-right">16-03-2021 </span></h6>
             </div> -->
           
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div style="text-align: center; margin-top: 10px;">
              <button  id="btn-update" class="btn btn-success" title="Click Here"><i class="fa fa-pencil"></i> Edit </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
  

 

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
<?php $this->view('js/listing_js'); $this->view('js/jobs_del_js'); $this->view('js/custom_js'); ?>
<!-- ========================Script==========================