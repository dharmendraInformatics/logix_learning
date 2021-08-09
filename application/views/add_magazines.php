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
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Magazines'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Magazines </a>
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
              <form method="post" action="#" id="frm-add-magazines">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Magazine Title <span class="req">*</span></label>
                      <input type="text" name="magazines_title" id="magazines_title" class="form-control"  placeholder="Magazine Title" required="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Author Name</label>
                      <input type="text" name="magazines_author" id="magazines_author" class="form-control"  placeholder="Author Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Author Contact</label>
                      <input type="number" name="magazines_author_contact" id="magazines_author_contact" class="form-control"  placeholder="Author Contact">
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Magazine Document <span class="req">*</span></label>
                    <input type="file" name="magazines_image" id="magazines_image" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Magazine Posted On</label>
                      <input type="date" name="magazines_postdate" id="magazines_postdate" class="form-control" placeholder="Join Date" value="<?php echo date('Y-m-d') ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Magazine Location</label>
                      <input type="text" name="magazines_location" id="magazines_location" class="form-control" placeholder="Magazine Location">
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Short Description <span class="req">*</span></label>
                        <textarea name="magazines_shortdesc" id="magazines_shortdesc" class="form-control" value="" placeholder="Short Description"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="magazines_status" id="magazines_status" class="form-control" title="Select Status">
                        <option value="1">Active</option>
                        <option value="0">In-active</option>
                      </select>
                    </div>
                  </div>


                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Full Description *</label>
                        <textarea name="magazines_desc"  class="form-control" value="" placeholder="Description" required="" id="editor1"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-add-magazines" class="btn btn-block btn-info">Add Magazine</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Magazines'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/magazines_js'); ?>
<!-- =======================/Footer================Fix=======