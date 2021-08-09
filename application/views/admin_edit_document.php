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
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Document'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Document
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
                <input type="hidden" name="m_document_id" value="<?php echo $a_value[0]->m_document_id ?>">
                <input type="hidden" name="m_document_pdfs" value="<?php echo $a_value[0]->m_document_pdf ?>">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Document Type <span class="req">*</span></label>
                      <select name="m_document_type" id="m_document_type" class="form-control" title="Select Document Type" required="">
                        <option value="">Select Document Type</option>
                        <option value="7" <?php echo $a_value[0]->m_document_type == 7?'selected':'' ?>>NOC</option>
                        <option value="8" <?php echo $a_value[0]->m_document_type == 8?'selected':'' ?>>Society Registration</option>
                        <option value="1" <?php echo $a_value[0]->m_document_type == 1?'selected':'' ?>>Building Safety Certificate</option>
                        <option value="2" <?php echo $a_value[0]->m_document_type == 2?'selected':'' ?>>Land Certificate</option>
                        <option value="3" <?php echo $a_value[0]->m_document_type == 3?'selected':'' ?>>Water Health Sanitation Certificate</option>
                        <option value="4" <?php echo $a_value[0]->m_document_type == 4?'selected':'' ?>>Recognition Certificate</option>
                        <option value="5" <?php echo $a_value[0]->m_document_type == 5?'selected':'' ?>>Fire Safty Certificate</option>
                        <option value="6" <?php echo $a_value[0]->m_document_type == 6?'selected':'' ?>>Mandatory Disclosers</option>
                        <option value="9" <?php echo $a_value[0]->m_document_type == 9?'selected':'' ?>>SELF AFFIDAVIT DOCUMENT</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Title <span class="req">*</span></label>
                      <input type="text" name="m_document_title" id="m_document_title" class="form-control"  placeholder="Title" required="" value="<?php echo $a_value[0]->m_document_title;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="m_document_status" id="m_document_status" class="form-control" title="Select Status">
                        <option value="1" <?php echo $a_value[0]->m_document_status == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo $a_value[0]->m_document_status == 0?'selected':'' ?>>In-active</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label>PDF</label>
                    <input type="file" name="m_document_pdf" id="m_document_pdf" class="form-control">
                    </div>
                  </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="submit" id="btn-update" class="btn btn-block btn-info">Update Document</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Document'); ?>" class="btn btn-block btn-danger">Cancel</a>
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
<?php $this->view('top_footer'); $this->view('js/document_js'); ?>
<!-- =======================/Footer================Fix=======