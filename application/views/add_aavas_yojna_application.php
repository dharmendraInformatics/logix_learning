<!--=========================View==============Fix========== -->
<!-- ========================Header==============Fix========= -->
<?php $this->view('top_header') ?>
<style>

.import_file {
    background: #4454c3;
    padding: 6px;
    border-radius: 7px;
    color: #fff;
}
.sample_doc{
  margin-top: 28px;
}
.mandand_para{
  padding: 14px;
}
.mar-para{
  font-size: 15px;
  font-weight: 500;
  margin-top: 10px;
}
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
            <div class="col-md-6 col-sm-6 pull-right">
              <div class="seipkon-breadcromb-right"> <a href="<?php echo site_url('Document/aavas_yojna_applicant'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> सभी आवेदन
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
              <form class="formdata" id="formdata" novalidate="" method= "post" action="<?php echo base_url('Document/import_application');?>">
                <div class="row">
                  <div class="mandand_para">
                    <h3>मानदंड चुने</h3>
                    <p class="mar-para">
                      आपका एक्सेल डेेता नीचे प्रारूप में होना चाहिए ! आपके एक्सेल की पहली पंक्ति को तालिका के उदहारण के अनुसार कॉलम हैडर चाहिए ! यह भी सुनिश्चित करे की अनावश्यक एन्कोडिंग समस्याओं से बचने के लिए आपकी फ़ाइल UTF-8 है !</p>
                    <p class="mar-para">
                       यदि आप दिनांक कॉलम को आयत करने का प्रयास कर रहे हैं वह यह सुनिश्चित करना है की पारुप Y-m-d (2021-01-01) में पारुपित है!
                    </p>
                    <p class="mar-para">
                      एकबार में मैक्सिमम 1000 डेटा ही आयत करे
                    </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group sample_doc">
                      <a href="<?php echo base_url('uploads/aavas_application/dpr_excel.xlsx') ?>" download>
                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-download"></i> फ़ाइल डाउनलोड करें</button>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>एक्सेल फ़ाइल आयात करें <span class="req">*</span></label>
                      <input class="import_file" placeholder="" name="import_file" id="import_file" type="file" required="">
                    </div>
                  </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-layout-submit">
                  <button type="button" id="btn-add" class="btn btn-block btn-info" onclick="importLeads()">फ़ाइल आयात करें</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-layout-submit"> <a href="<?php echo site_url('Document/add_aavas_yojna_application'); ?>" class="btn btn-block btn-danger">
रद्द करें</a>
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
<?php $this->view('top_footer'); $this->view('js/import_js'); ?>
<!-- =======================/Footer================Fix=======