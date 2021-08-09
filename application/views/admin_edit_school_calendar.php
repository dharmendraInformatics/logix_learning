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
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('School_Calendar'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> School Calendar
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
                <input type="hidden" name="m_cal_id" value="<?php echo $a_value[0]->m_cal_id ?>">
                <input type="hidden" name="m_cal_pdfs" value="<?php echo $a_value[0]->m_cal_pdf ?>">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Title <span class="req">*</span></label>
                      <input type="text" name="m_cal_title" id="m_cal_title" class="form-control"  placeholder="Title" required="" value="<?php echo $a_value[0]->m_cal_title ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Date <span class="req">*</span></label>
                      <input type="date" name="m_cal_date" id="m_cal_date" class="form-control"  placeholder="Title" required="" value="<?php echo $a_value[0]->m_cal_date ?>">
                    </div>
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Current</label>
                      <select name="m_cal_is_current" id="m_cal_is_current " class="form-control" title="Select Status">
                        <option value="1" <?php echo $a_value[0]->m_cal_is_current == 1?'selected':'' ?>>Yes</option>
                        <option value="0" <?php echo $a_value[0]->m_cal_is_current == 0?'selected':'' ?>>No</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label>PDF <span class="req">*</span></label>
                    <input type="file" name="m_cal_pdf" id="m_cal_pdf" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="m_cal_status" id="m_cal_status" class="form-control" title="Select Status">
                        <option value="1" <?php echo $a_value[0]->m_cal_status == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo $a_value[0]->m_cal_status == 0?'selected':'' ?>>In-active</option>
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
                        <textarea name="m_cal_desc" id="m_cal_desc" class="form-control" value="" placeholder="Description"><?php echo $a_value[0]->m_cal_desc ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-update" class="btn btn-block btn-info">Update Calendar</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('School_Calendar'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/school_calendar_js'); $this->view('js/custom_js'); ?>
<!-- =======================/Footer================Fix=======