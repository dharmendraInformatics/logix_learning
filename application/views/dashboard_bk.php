<?php date_default_timezone_set('Asia/Kolkata'); ?>
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
    .info-box {
      background: none;
      height: 129px;
      background-image: url(uploads/circle.svg);
      background-repeat: no-repeat;
      background-position: right;
      background-size: 100%;
    }

    .info-box-icon>img {
      max-width: 100%;
    }

    .info-box-icon {
      border-radius: 100px;
      width: 50px;
      height: 50px;
      background-color: #0e84ae;
      color: white;
      font-size: 19px;
      line-height: 50px;
      margin: 16px;
      display: block;
      float: left;
      text-align: center;
    }

    .info-box-text {
      text-transform: capitalize;
      font-size: 17px;
      overflow: visible;
      color: white;
      font-weight: 700;
    }

    .info-box-content {
      margin-left: 0px;
      margin-right: 11px;
    }

    .info-box-number {
      display: block;
      font-weight: 700;
      font-size: 30px;
      color: white;
      margin-top: 15px;
      float: right;
  }


  .box {
    position: relative;
      border-radius: 3px;
      background: #ffffff;
     border:none;
      margin-bottom: 20px;
      width: 100%;
      box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);
  }

  .crd {
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .skin-blue .main-sidebar {
    position: sticky;
      top: 0;
      padding: 0px;
      float: left;
      box-shadow: 0px 8px 14.72px 1.28px rgba(159, 150, 226, 0.7);
      height: 800px;
  }


  .sidebar-menu>li {
    width: 95%;
  }

  .skin-blue .sidebar-menu>li>.treeview-menu {
    background: white;
  }

  .skin-blue .treeview-menu>li>a {
      color: #2d3144;
      margin-top: 1em;
      margin-bottom: 1em;
  }

  .skin-blue .treeview-menu>li>a:hover {
    color: #002cff;
    
  }

  .flexistart {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .seacrh-box{
    width: 40%;
    display: inline-table;
    height: 25px;
  }
</style>
<!-- =====================/Page Style======================== -->

<!-- ======================Page Title======================== --> 
<!-- Breadcromb Row Start -->
<div class="row">
   <div class="col-md-12">
      <div class="breadcromb-area">
         <div class="row">
            <div class="col-md-4  col-sm-4">
               <div class="seipkon-breadcromb-left">
                  <h3>Dashboard</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Breadcromb Row -->
<!-- =====================/Page Title======================== -->

<!-- =====================Page Content======================= -->
<!-- Widget Row Start --> <!-- Info boxes -->

<div class="row">
   <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#0288d1,#26c6da)!important; box-shadow: inset 20px -4px 20px 3px #48c1df;" class="crd">
   
         <div class="info-box">
            <div class="col-md-7 flexistart">
            <span class="info-box-icon"><img src="uploads/customer.png">
            </span>
             <span class="info-box-text"> Adminstration</span>
      </div>
      <div class="col-md-5">
            <div class="info-box-content">
               <span class="info-box-number"><?php echo $dashboard_statics[0]->total;?></span>
            </div> <!-- /.info-box-content -->
            </div>
         </div> <!-- /.info-box -->
      </div>
            </a>
   </div> <!-- /.col -->

 
   <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#ff5252,#f48fb1)!important; box-shadow: inset 20px -4px 20px 3px #f997ab;" class="crd">
         <div class="info-box">
          <div class="col-md-7 flexistart">
            <span style="background: #ce5a65;" class="info-box-icon"><img src="uploads/category.png"> </span>
             <span class="info-box-text">Magazines</span>
            </div>
             <div class="col-md-5">            
            <div class="info-box-content">
               <span class="info-box-number"><?php echo $dashboard_statics[1]->total;?></span>
            </div> <!-- /.info-box-content -->
            </div>
         </div> <!-- /.info-box -->
      </div>
            </a>
   </div> <!-- /.col -->

   <!-- fix for small devices only -->
   <div class="clearfix visible-sm-block"></div>

   <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#ff6f00,#ffca28)!important; box-shadow: inset 20px -4px 20px 3px #ffbb48;" class="crd">
         <div class="info-box">
          <div class="col-md-7 flexistart">
            <span style="background: #d1760c;" class="info-box-icon "><img src="uploads/product.png"> </span>
             <span class="info-box-text">Events</span>
             </div>
            <div class="col-md-5">
            <div class="info-box-content">
               <span class="info-box-number"><?php echo $dashboard_statics[2]->total;?></span>
            </div> <!-- /.info-box-content -->
            </div>
         </div>
      </div><!-- /.info-box -->
            </a>
    </div><!-- /.col -->

    <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#43a047,#1de9b6)!important; box-shadow: inset 20px -4px 20px 3px #57d6a1;" class="crd">
         <div class="info-box">
          <div class="col-md-7 flexistart">
            <span style="background: #d1760c;" class="info-box-icon "><img src="uploads/product.png"> </span>
             <span class="info-box-text">Video</span>
             </div>
            <div class="col-md-5">
              <div class="info-box-content">
                 <span class="info-box-number"><?php echo $dashboard_statics[3]->total;?></span>
                 
              </div> <!-- /.info-box-content -->
              <div class="info-box-content" style="margin-top: 67px;">
                <!--span class="info-box-number" style="font-size: 14px;"><?php echo date('F');?></span-->
              </div>
            </div>
         </div>
      </div><!-- /.info-box -->
            </a>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#bb231b,#ce1a1a)!important; box-shadow: inset 20px -4px 20px 3px #de372f;" class="crd">
         <div class="info-box">
          <div class="col-md-7 flexistart">
            <span style="background: #d1760c;" class="info-box-icon "><img src="uploads/product.png"> </span>
             <span class="info-box-text">Upcoming Events</span>
             </div>
            <div class="col-md-5">
              <div class="info-box-content">
                 <span class="info-box-number"><?php echo $dashboard_statics[4]->total;?></span>
                 
              </div> <!-- /.info-box-content -->
              <div class="info-box-content" style="margin-top: 67px;">
                <!--span class="info-box-number" style="font-size: 14px;"><?php echo date('F');?></span-->
              </div>
            </div>
         </div>
      </div><!-- /.info-box -->
            </a>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12"><br>
            <a href="<?php echo site_url('') ?>">
      <div style="background: linear-gradient(45deg,#5a43a0,#9b0ce4)!important; box-shadow: inset 20px -4px 20px 3px #7057d6;" class="crd">
         <div class="info-box">
          <div class="col-md-7 flexistart">
            <span style="background: #d1760c;" class="info-box-icon "><img src="uploads/product.png"> </span>
             <span class="info-box-text">Upcoming Notice</span>
             </div>
            <div class="col-md-5">
              <div class="info-box-content">
                 <span class="info-box-number"><?php echo $dashboard_statics[5]->total;?></span>
                 
              </div> <!-- /.info-box-content -->
              <div class="info-box-content" style="margin-top: 67px;">
                <!--span class="info-box-number" style="font-size: 14px;"><?php echo date('F');?></span-->
              </div>
            </div>
         </div>
      </div><!-- /.info-box -->
            </a>
    </div><!-- /.col -->
     <!-- Graph Section -->
    <!-- <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="page-box">
        <canvas id="myChart" width="400" height="275"></canvas>
      </div> -->
    </div>
    <!-- /Graph Section -->

    
        
</div> <!-- /.row -->
<!-- End Widget Row -->
<!-- ====================/Page Content======================= -->

<!-- =========================View=================Fix======= -->
      <!-- End Widget Row -->
      </div>
    </div>
<!-- ========================/View=================Fix======= -->

<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer') ?>
<?php $this->view('js/dashboard_js');?>
<!-- =======================/Footer================Fix======= -->
//==========================/Graph============================//
<?php
/*$data = json_decode(monthly_job());
    foreach($data->counsolers as $sourc){
      $counsolers[] = $sourc;
    }
    foreach($data->months as $mnth){
      $mnths[] = $mnth;
    }*/
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($counsolers) ?>,
        datasets: [{
            label: 'Counselors By Leads',
            data: <?php echo json_encode($mnths) ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


</script>
<!-- =======================/Script========================== -->


         