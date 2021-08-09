<!--=========================View==============Fix========== -->
<!-- ========================Header==============Fix========= -->
<?php $this->view('top_header') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />
<style>
  .cr-slider-wrap{
    //display: none !important;
  }
  /*.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
    width: 50% !important;
  }*/
  /*.cr-image{
    max-width: 100% !important;
    height: auto !important;
  }
  .croppie-container {
    width: 100% !important;
    height: 100%;
  }
  .croppie-container .cr-boundary {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    z-index: 1;
    width: 100% !important;
    height: 100% !important;
}*/
</style>
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
              <div class="seipkon-breadcromb-right">

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
     <style>
       .choose-file{
            background: #175aa9;
            color: white;
            border-radius: 10px;
            padding: 5px;
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
             <!--  <form method="post" action="#" id="frm-add"> -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div id="uploaded_image"></div>
                      <label>Image(250pxX250px)</label>
                      <input type="file" class="choose-file" name="upload_image" id="upload_image" accept="image/*" />
                    </div>
                  </div>
                </div>
                <div id="uploadimageModal" class="modal" role="dialog">
                  <div class="modal-dialog modal-md">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">×</button>
                              <h4 class="modal-title">Upload & Crop Image</h4>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-8 text-center">
                                      <div id="image_demo" style="width:350px; margin-top:30px"></div>
                                  </div>
                                  <div class="col-md-4" style="padding-top:30px;">
                                      <br />
                                      <br />
                                      <br/>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button class="btn btn-success crop_image">Crop & Upload Image</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
                </div>
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

<?php $this->view('top_footer'); $this->view('js/custom_js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<?php $this->view('js/crop_js');?>
<!-- =======================/Footer================Fix=======