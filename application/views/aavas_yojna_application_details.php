<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title></title>

  <?php echo  link_tag('assets/print/css/bootstrap.css'); ?>
  <?php echo  link_tag('assets/print/css/bootstrap.min.css'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .person {
      border:2px solid black;
      width: 150px;
      height: 150px;
      margin-right: 10px;
    }
    th,td {
      text-align: center;
    }
    .remark {
      overflow-wrap:anywhere;
      border:1px solid grey; 
      padding: 10px;
    }
    .box {
      border:1px solid black;
      height: 200px;
      text-align: center;
      padding-bottom: 10px;
    }
    .sent-size{
      font-weight: 700 !important;
    } 

    @media print {
      footer {page-break-after: always;}
    }
  </style>
</head>
<body>
<section >
  <?php
    $bhumi_type = '<i class="fa fa-check"></i>';
  ?>
  <div class="container">
    <h4 align="center">प्रधानमंत्री आवास योजना-सबके लिए आवास मिशन (शहरी) 2022<br>
अन्तर्गत सम्मिलित किये जाने के लिए आबादी प्रमाण-पत्र हेतु आवेदन प्रपत्र
</h4>

<div class="form pt-3">

<div class="row ">

<div class="col-8">

<div class="row pb-3">
  <div class="col-6">आवेदन पत्र क्र. ............ </div>
  <div class="col-6"> दिनांक……..</div>
</div>

<div class="row pb-3">
  <div class="col-6">नगरीय निकाय का नाम :  <span class="sent-size">&nbsp;&nbsp;भिलाई चरोदा</span></div>
  <div class="col-6"> जिला:  दुर्ग (छ. ग )</div>
</div>

<div class="row pb-3">
  <div class="col-6">वार्ड क्र : <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_ward_no;?></span></div>
  <div class="col-6">वार्ड का नाम : <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_ward_name;?></span></div>
</div>

<div class="row pb-3">
  <div class="col-12">मोहल्ला : <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_ward_gram_name;?></span></div>
</div>

</div>


<div class="col-4 ">
<div class="d-flex">
<div class="person">
  <img src="">
</div>
<div class="person">
  <img src="">
</div>
</div>
  
</div>

</div>

</div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row pb-3">
  <div class="col-12">1. हितग्राही का नाम : श्रीमती / सुश्री / श्रीमान <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?></span></div>
</div>


<div class="row pb-3">
  <div class="col-6">2.. आधार नं <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_adhar_no;?></span></div>
  <div class="col-6">मोबाइल  नं <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_mobile_no;?></span></div>
</div>

<div class="row pb-3">
  <div class="col-12">3. पत्नि/पति/पिता का नाम : <span class="sent-size">&nbsp;&nbsp;<?php echo $a_value[0]->m_father_husb_name_hindi;?></span></div>
</div>

<div class="row pb-3">
  <div class="col-6">4. आधार नं. : .......    </div>
  <div class="col-6"> मोबाइल  नं………..</div>
</div>

<div class="row pb-3">
  <div class="col-4">5. जाति :........    </div>
  <div class="col-8">वर्ग (अजा/अजजा / अ.पि.व. / अन्य)..................</div>
</div>

<div class="row pb-3">
  <div class="col-12">6. पूर्व में आबादी पट्टा जारी हुआ है ?&nbsp;&nbsp;&nbsp;&nbsp;   हाँ[ ]  /  नहीं[<?php echo $bhumi_type;?>]  </div>
 
</div>

<div class="row pb-3">
  <table class="table table-bordered border-primary">
  <thead>
    <tr>
      
      <th scope="col" >खसरा नं. </th>
      <th scope="col" >भूखण्ड का क्षेत्रफल (व.मी.)</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><span class="sent-size"><?php echo $a_value[0]->m_khasra_no;?></span></td>
      <td><span class="sent-size"><?php echo $a_value[0]->m_bhukhand_sq;?></span> व.मी.</td>
    </tr>
    
  </tbody>
</table>
</div>
  </div>
</section>

<section >
  <div class="container">
    <div class="row pb-3">
      <div>
      </div>
      <div class="col-4">7. स्थल का वर्तमान उपयोग    :  </div>
      <div class="col-8"> 
        <?php
        if($a_value[0]->m_bhumi_type=='आवासीय'){
          echo "आवासीय [".$bhumi_type."]"; 
        }
        else{
          echo "आवासीय [&nbsp;&nbsp;&nbsp;]";
        }
        if($a_value[0]->m_bhumi_type=='व्यवसायिक'){
          echo " / व्यवसायिक [".$bhumi_type."]"; 
        }
        else{
          echo " / व्यवसायिक [&nbsp;&nbsp;&nbsp;]";  
        }
        if($a_value[0]->m_bhumi_type=='आवासीय सह व्यावसायिक'){
          echo " / आवासीय सह व्यावसायिक [".$bhumi_type."]"; 
        }
        else{
          echo " / आवासीय सह व्यावसायिक [&nbsp;&nbsp;&nbsp;]";
        }
        ?>
      </div>
    </div>

     <div class="row pb-3">
      <div class="col-4">8. निर्मित आवास की स्थिति  :  </div>
      <div class="col-8">
        <?php
          if($a_value[0]->m_aavas_isthiti=='कच्चा'){
            echo "कच्चा [".$bhumi_type."]"; 
          }
          else{
            echo "कच्चा [&nbsp;&nbsp;&nbsp;]";
          }
          if($a_value[0]->m_aavas_isthiti=='अर्द्ध पक्का'){
            echo " / अर्द्ध पक्का [".$bhumi_type."]"; 
          }
          else{
            echo " / अर्द्ध पक्का' [&nbsp;&nbsp;&nbsp;]";  
          }
          if($a_value[0]->m_aavas_isthiti=='पक्‍का'){
            echo " / पक्‍का [".$bhumi_type."]"; 
          }
          else{
            echo " / पक्‍का [&nbsp;&nbsp;&nbsp;]";
          }
          ?>
      </div>
    </div>
    <?php
    $varsh = (rand(6,8));
    ?>
     <div class="row pb-3">
      <div class="col-8">9. वर्तमान में काबिज आबादी भूमि पर कब्जेधारी की कब्जे की अवधि:   [ <span class="sent-size"><?php echo $varsh;?></span> ] वर्ष</div>
      <!-- <div class="col-4"> [<?php echo $varsh;?>] वर्ष</div> -->
    </div>

     <?php
     $randomVal = (rand(1,2));
     ?>
     <div class="row pb-3">
      <div class="col-12 pb-3">10.निम्नानुसार दस्तावेज जो आपका 31 अगस्त 2015 के पूर्व के कब्जे को दर्शाता हो, की जानकारी हेतु संलग्न करना सुनश्चित करें :- </div>
      <div class="col-5">1. पूर्व में जारी पट्टे की छायाप्रति</div>  <div class="col-5">[&nbsp;&nbsp;&nbsp;&nbsp;]</span></div>
      <?php
       if($randomVal=='1'){
          echo '<div class="col-5">2. बिजली बिल के रसीद की छायाप्रति </div><div class="col-5">['.$bhumi_type.']</div>'; 
        }
        else{
          echo '<div class="col-5">2. बिजली बिल के रसीद की छायाप्रति</div><div class="col-5">[&nbsp;&nbsp;&nbsp;&nbsp;]</div>';
        }
      ?>
      <div class="col-5">3. नल कनेक्शन का बिल के रसीद की छायाप्रति</div><div class="col-5">[&nbsp;&nbsp;&nbsp;&nbsp;]</div>
      <?php
       if($randomVal=='2'){
          echo '<div class="col-5">4. संपत्ति / समेकित कर देयक की छायाप्रति</div><div class="col-5">['.$bhumi_type.']</div>'; 
        }
        else{
          echo '<div class="col-5">4. संपत्ति / समेकित कर देयक की छायाप्रति</div><div class="col-5">[&nbsp;&nbsp;&nbsp;&nbsp;]</div>';
        }
      ?>
    </div>

    <div class="row pb-3">
      <div class="col-12 pb-3">(नोट :- उक्त दस्तावेजों में से कोई 04 दस्तावेज स्वसत्यापित कर संलग्न करें|
       संयुक्त परिवार की स्थिति में हितग्राही द्वारा उक्त दस्तावेजों में से कोई एक दस्तावेज जो परिवार के अन्य सदस्यों के नाम पर हो के साथ राशन कार्ड, वंशावली, आधार कार्ड, मतदाता पहचान पत्र, शैक्षणिक योग्यता (केवल बोर्ड परीक्षा) संबंधी आदि अभिप्रमाणित दस्तावेज संलग्न किया जावे, ताकि पारिवारिक संबंध की पुष्टि की जा सके)</div>
      <div class="col-9">11. भूमि / आवास में मालिकाना हक /  स्वत्व संबंधी वाद न्यायालय में लंबित है :</div>
      <div class="col-3"> हाँ [ ] / नहीं [<?php echo $bhumi_type;?>]</div>

    </div>

    <div class="row pb-3">
      <div class="col-12">12. यदि हाँ तो वाद का संक्षिप्त विवरण :................................................................................................................................................................................................................................................................................................................. .................................................................................................................................................................................................................................................................................................................</div>

    </div>

    <div class="row pb-3">
      <div class="col-12">13. भू-भाग की चर्तुसीमा का विवरण</div>
    </div>

     <div class="row pb-3">
      <div class="col-6">(अ) उत्तर दिशा में&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &#x2191; :- </div>
      <div class="col-4"> नजरी नक्शा </div>
      <div class="col-2">   उत्तर </div>    
    </div>

    <div class="row pb-3 align-items-center">
      <div class="col-6">(ब) दक्षिण दिशा में&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &#x2193; :- </div>
      <div class="col-4" style="font-size: 39px;"></div>
      <div class="col-2"><i class="fa fa-long-arrow-up fa-2x"></i></div>
    </div>

     <div class="row pb-3">
      <div class="col-12">(स) पूर्व दिशा में जले &nbsp;      &#x2192; :- </div>
      <div class="col-12 pt-4">(द) पश्चिम दिशा में &nbsp;&nbsp;&nbsp;&nbsp;           &#x2190; :- </div>
    </div>

     <div class="row pb-3 pt-5">
      <div class="col-4">हस्ताक्षर पट्टेदार / कब्जेदार <br><br> ____________________________ </div>
      <div class="col-4"> हस्ताक्षर गवाह  <br><br> ____________________________            </div>
      <div class="col-4">   हस्ताक्षर सत्यापनकर्त्ता  <br><br> ____________________________</div>    
    </div>


  </div>
</section>

<!-- first page end -->

<footer></footer>


<section class="second_page">
  <div class="container">
        <h4 align="center">निरीक्षण प्रतिवेदन </h4>

      <div class="form pt-3">

      <div class="row pb-3 ">
      <div class="col-12">
         &nbsp;&nbsp;&nbsp;&nbsp;हितग्राही का नाम :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; श्रीमती / सुश्री / श्रीमान  <span class="sent-size"><?php echo $a_value[0]->m_name_hindi;?></span>  पत्नि/पति/पिता का
         <br><br>नाम :<span> <span class="sent-size"><?php echo $a_value[0]->m_father_husb_name_hindi;?></span> </span>आधार नं. : <span>
           <span class="sent-size"><?php echo $a_value[0]->m_adhar_no;?></span>
         </span> द्वारा प्रस्तुत आवेदन क्र. <span> ...................... </span>का <br><br>निरीक्षण हमारे द्वारा किया गया, जिसका प्रतिवेदन निम्नानुसार है :-

      </div>
      </div>

      <div class="row pb-3">
        <div class="col-4">1. स्थल का वर्तमान उपयोग        : </div>
        <div class="col-8">
          <?php
          if($a_value[0]->m_bhumi_type=='आवासीय'){
            echo "आवासीय [".$bhumi_type."]"; 
          }
          else{
            echo "आवासीय [&nbsp;&nbsp;&nbsp;]";
          }
          if($a_value[0]->m_bhumi_type=='व्यवसायिक'){
            echo " / व्यवसायिक [".$bhumi_type."]"; 
          }
          else{
            echo " / व्यवसायिक [&nbsp;&nbsp;&nbsp;]";  
          }
          if($a_value[0]->m_bhumi_type=='आवासीय सह व्यावसायिक'){
            echo " / आवासीय सह व्यावसायिक [".$bhumi_type."]"; 
          }
          else{
            echo " / आवासीय सह व्यावसायिक [&nbsp;&nbsp;&nbsp;]";
          }
          ?>
        </div>
      </div>

       <div class="row pb-3">
        <div class="col-4">2. निर्मित आवास की स्थिति        :  </div>
        <div class="col-8">
          <?php
          if($a_value[0]->m_aavas_isthiti=='कच्चा'){
            echo "कच्चा [".$bhumi_type."]"; 
          }
          else{
            echo "कच्चा [&nbsp;&nbsp;&nbsp;]";
          }
          if($a_value[0]->m_aavas_isthiti=='अर्द्ध पक्का'){
            echo " / अर्द्ध पक्का [".$bhumi_type."]"; 
          }
          else{
            echo " / अर्द्ध पक्का' [&nbsp;&nbsp;&nbsp;]";  
          }
          if($a_value[0]->m_aavas_isthiti=='पक्‍का'){
            echo " / पक्‍का [".$bhumi_type."]"; 
          }
          else{
            echo " / पक्‍का [&nbsp;&nbsp;&nbsp;]";
          }
          ?>
        </div>
      </div>


       <div class="row pb-3">
        <div class="col-8">3. वर्तमान में काबिज आबादी भूमि पर कब्जेघारी की कब्जे की अवधि संबंधी दस्तावेज : </div>
        <div class="col-4"> सही [<?php echo $bhumi_type;?>] /गलत [_]</div>
      </div>


       <div class="row pb-3">
        <div class="col-12">4. हितग्राही द्वारा काबिज भूखण्ड का क्षेत्रफल हैं: <?php echo $a_value[0]->m_bhukhand_sq;?>  वर्गमीटर  </div>
      </div>


       <div class="row pb-3">
        <div class="col-8">5. भूमि/आवास में मालिकाना हक/स्वत्व संबंधी न्यायालय में वाद संबंधी दस्तावेज : </div>
        <div class="col-4"> सही [<?php echo $bhumi_type;?>] /गलत [_]</div>
      </div>

      <div class="row pb-3">
        <div class="col-12">6. भू-भाग की चर्तुसीमा का विवरण निम्नानुसार है :- </div>
      </div>

       <div class="row pb-3">
      <div class="col-6">(अ) उत्तर दिशा में&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &#x2191; :- </div>
      <div class="col-4"> नजरी नक्शा </div>
      <div class="col-2">   उत्तर </div>    
    </div>

    <div class="row pb-3 align-items-center">
          <div class="col-6">(ब) दक्षिण दिशा में&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &#x2193; :- </div>
          <div class="col-4" style="font-size: 39px;"></div>
          <div class="col-2"><i class="fa fa-long-arrow-up fa-2x"></i></div>
      
    </div>

     <div class="row pb-3">
      <div class="col-12">(स) पूर्व दिशा में जले &nbsp;      &#x2192; :- </div>
      <div class="col-12 pt-4">(द) पश्चिम दिशा में &nbsp;&nbsp;&nbsp;&nbsp;           &#x2190; :- </div>
    </div>


    <div class="row pb-3">
      <div class="col-12">
        <div class="remark">
          <h6>रिमार्क: </h6>
          <span>..................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................</span>
        </div>
      </div>
    </div>


    <div class="row pt-3 pb-3">
      <div class="col-12">
        हमारे द्वारा वैकल्पिक प्रमाण-पत्र हेतु हितग्राही द्वारा प्रस्तुत आवेदन की पुष्टि हेतु मौका स्थल <br><br>दिनांक  <span>……………………….…..……………………….…..</span> को निरीक्षण किया गया। स्थल निरीक्षण में हितग्राही द्वारा प्रस्तुत 
        दस्तावेज <span>सही [<?php echo $bhumi_type;?>]  / गलत [  ] </span> पाये गए। <br><br> हितग्राही को प्रधानमंत्री आवास योजना अन्तर्गत लाभान्वित किये जाने की अनुशंसा की जाती <span>है [<?php echo $bhumi_type;?>] / नहीं  की जाती है [ ]।</span><br><br>
निरीक्षण दल के हस्ताक्षर मय पदमुद्रा (सील) दिनांक सहित :

      </div>
    </div>


    <div class="row pt-3 pb-3">
      <div class="col-4">
        <div class="box d-flex flex-column-reverse">
           (उप अभियंता)
        न.पा.नि.//न.पा.प. / न.पं.
        </div>
      </div>

      <div class="col-4">
        <div class="box d-flex flex-column-reverse">
            (राजस्व निरीक्षक)
      (यदि निकाय में उपलब्ध हो)
        </div>
      </div>

      <div class="col-4">
        <div class="box d-flex flex-column-reverse">
           (मोहर्रिर / सहा. राजस्व
         निरीक्षक / पटवारी)
        </div>
      </div>
    </div>
   </div>
  </div>
</section>
<input type="hidden" id="app_id" value="<?php echo $app_id;?>">
</body>

<script src="<?php echo base_url('assets/print/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/print/js/bootstrap.min.js')?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script type="text/javascript">
 window.onload=function(){
  setTimeout(function(){
    window.print();
   // window.close();
  },100);
}
</script>
<script>
  $(document).ready(function(e) {
    var app_id = $("#app_id").val();
    $.ajax({
       type:"post",
       url:'<?php echo base_url("Document/first_time_print");?>',
       dataType  : 'json',  
       data:
       {
         app_id:app_id,
       },
       success: function(data){
         
       }
    });
  });
</script> -->
</html>