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
.card{
  box-shadow: 0px 1px 4px 4px rgb(176 184 214 / 9%), 10px 10px 15px -5px #b0b8d6 !important;
}
.img{
  width: 100% !important;
  height: 300px 
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
                <h3><?php echo $pagename?></h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              <div class="seipkon-breadcromb-right">
                <a href="<?php echo site_url('Administration'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All User </a>
                <a href="<?php echo site_url('Administration/edit_user?id=').$id; ?>" class="btn btn-info btn-vsm"><i class="fa fa-edit"></i> Edit User </a>
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
          <div class="col-md-4">
            <div class="card">
              <?php
              if(!empty($all_value[0]->mu_image)){
                $image_link = base_url('uploads/user/').$all_value[0]->mu_image;
              }
              else{
                $image_link = base_url('uploads/default_users.png');
              }
              if($all_value[0]->mu_type=1)
                $u_type = 'Board of Management';
              else if($all_value[0]->mu_type=3)
                $u_type = 'Administrative';
              else if($all_value[0]->mu_type=4)
                $u_type = 'School Committee';
              else if($all_value[0]->mu_type=5)
                $u_type = 'PTA';
              else
                $u_type = 'Faculty';
              if($all_value[0]->mu_status=1)
                $u_status = 'ACTIVE';
              else
                $u_status = 'INACTIVE';
              ?>
              <img class="card-img-top img" src="<?php echo $image_link;?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $all_value[0]->mu_name;?></h5>
                <table class="table table-bordered" style="margin-top: 10px">
                  <tbody>
                    <tr>
                      <td>Contact</td>
                      <th><input type="text" value="<?php echo $all_value[0]->mu_contact;?>" name="mu_contact"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-phone"></i></th>
                    </tr> 
                    <tr>
                      <td>Email</td>
                      <th><input type="text" value="<?php echo $all_value[0]->mu_email;?>" name="mu_email"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-envelope-o"></i></th>
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
           <div class="col-md-8">
              <div class="card">
              <table class="table table-bordered" style="margin-top: 10px">
                <tbody>
                  <tr>
                      <td>Designation</td>
                      <th><input type="text" value="<?php echo $all_value[0]->mu_desgination;?>" name="t_job_no"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-user"></i></th>
                    </tr> 
                    <tr>
                      <td>Department</td>
                      <th><input type="text" value="<?php echo $all_value[0]->mu_department;?>" name="mu_contact"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-user"></i></th>
                    </tr>  
                  <tr>
                    <td>Administration</td>
                    <th><input type="text" value="<?php echo $u_type;?>" name="mu_email"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-user"></i></th>
                  </tr> 
                  <tr>
                    <td>Joining Date</td>
                    <th><input type="text" value="<?php echo date('d-m-Y',strtotime($all_value[0]->mu_joined_on));?>" name="mu_joined_on"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-calendar-o"></i></th>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <th><input type="text" value="<?php echo $all_value[0]->mu_address;?>" name="mu_email"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-address-card-o"></i></th>
                  </tr> 
                  <tr>
                    <td>Status</td>
                    <th><input type="text" value="<?php echo $u_status;?>" name="mu_joined_on"><i style="color: lightgrey;" title="Click Above Name For Edit" class="fa fa-user"></i></th>
                  </tr>
                </tbody>
              </table>
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
<?php  $this->view('js/custom_js'); ?>
<!-- ========================Script==========================