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
            <div class="col-md-6 col-sm-6 pull-right">
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Star_performer'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Star Performer
               </a>
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
                <input type="hidden" name="performer_id" value="<?php echo $a_value[0]->performer_id ?>">
                  <input type="hidden" name="performer_images" value="<?php echo $a_value[0]->performer_image ?>">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Performer Name <span class="req">*</span></label>
                      <input type="text" name="performer_name" id="performer_name" class="form-control"  placeholder="Performer Name" required="" value="<?php echo $a_value[0]->performer_name;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Performer Contact <span class="req">*</span></label>
                      <input type="text" name="performer_contact" id="performer_contact" class="form-control"  placeholder="Performer Contact" required="" value="<?php echo $a_value[0]->performer_contact;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Image</label>
                    <input type="file" name="performer_image" id="performer_image" class="form-control" >
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="performer_desc" id="performer_desc" class="form-control" value="" placeholder="Description"><?php echo $a_value[0]->performer_desc;?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="performer_status" id="performer_status" class="form-control" title="Select Status">
                        <option value="1" <?php echo $a_value[0]->performer_status == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo $a_value[0]->performer_status == 0?'selected':'' ?>>In-active</option>
                      </select>
                    </div>
                  </div>
                </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-update" class="btn btn-block btn-info">Update Performer</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Star_performer'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/star_performer_js'); $this->view('js/custom_js'); ?>
<!-- =======================/Footer================Fix=======