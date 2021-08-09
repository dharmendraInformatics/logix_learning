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
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('News'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All News
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
              <form method="post" action="#" id="frm-add">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>News Type <span class="req">*</span></label>
                      <select name="m_news_type" id="m_news_type " class="form-control" title="Select News Type" required="">
                        <option value="">Select News Type</option>
                        <option value="1">News</option>
                        <option value="2">Notice</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Title <span class="req">*</span></label>
                      <input type="text" name="m_news_title" id="m_news_title" class="form-control"  placeholder="Title" required="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>News Posted</label>
                      <input type="date" name="m_news_posted" id="m_news_posted" class="form-control"  placeholder="News Posted" required="" value="<?php echo date('Y-m-d');?>">
                    </div>
                  </div>
              </div>
              <div class="row">
                 <div class="col-md-8">
                    <div class="form-group">
                      <label>Image</label>
                    <input type="file" name="m_news_image" id="m_news_image" class="form-control" required="">
                    </div>
                  </div>
                 <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="m_news_status" id="m_news_status" class="form-control" title="Select Status">
                        <option value="1">Active</option>
                        <option value="0">In-active</option>
                      </select>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="m_news_desc" id="m_news_desc" class="form-control" value="" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-add" class="btn btn-block btn-info">Add News</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('News'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/news_js'); $this->view('js/custom_js'); ?>
<!-- =======================/Footer================Fix=======