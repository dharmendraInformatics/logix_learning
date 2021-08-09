<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title></title>
        <?php echo  link_tag('assets/buildingprint/css/bootstrap.css'); ?>
        <?php echo  link_tag('assets/buildingprint/css/bootstrap.min.css'); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            body {
              margin: 0px;
              padding: 0px;
              font-size: 13px;
            }
            @media print {
              footer {page-break-after: always;}
            }
            .f-size{
              font-size: 11px;
            }
            .sent-size{
              font-weight: 700;
            }
            .pb-25 {
                padding-bottom: 25.25rem!important;
            }
        </style>
    </head>
    <body>
        <!--1st Page-->
        <section>
            <div class="container">
                <h4 align="center">  कार्यालय, नगर पालिक निगम, भिलाई-चरौदा, जिला-दुर्ग (छ.ग.)</h4>
                <div class="form pt-1">
                    <div class="row border-top border-bottom">
                        <div class="col-6">विभाग :- लोक कर्म विभाग</div>
                        <div class="col-6">  नस्ती पंजीयन क्र <span>…………………………...</span></div>
                        <div class="col-12">विषय :-“प्रधानमंत्री आवास योजना “मोर जमीन-मोर </div>
                        <div class="col-12">मकान” के तहत्‌ भवन अनुज्ञा।</div>
                    </div>
                    <div class="row border-bottom ">
                        <div class="col-2">दिनांक :</div>
                        <div class="col-8" align="center"> टिप, आदेश, संक्षिप्त विवरण</div>
                        <div class="col-2">विषय :</div>
                    </div>
                    <div  style="border-left: 1px solid black; position: absolute; height: 87%; left: 63px;"></div>
                    <div  style="border-right: 1px solid black; position: absolute; height: 87%; right: 100px;"></div>
                    <div class="row pt-1 pb-1">
                        <div class="col-1"></div>
                        <div class="col-4">1- प्रोजेक्ट कोड :- &nbsp;<span class="sent-size">&nbsp;<?php echo $a_value[0]->m_project_code;?>… </span></div>
                        <div class="col-2">CSMC <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_csmc;?></span></div>
                        <div class="col-3">स्वीकृति दिनांक<span class="sent-size">&nbsp;
                            <?php 
                            if($a_value[0]->m_swkriti_date!='0000-00-00'){
                                echo $a_value[0]->m_swkriti_date;
                            }
                            else{
                                echo '……………………';
                            }
                            ?>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">2- हितग्राही का नाम,/आईडी :- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?></span></div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">3- पिता या पति का नाम :- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_father_husb_name_hindi;?></span></div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">स्वीकृत D.P.R अनुसार विवरण :-</div>
                        <div class="col-2"></div>
                        <div class="col-1"></div>
                        <div class="col-9">1.भूखंड  क्षेत्रफल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bhukhand_sq;?></span> वर्गमीटर </div>
                        <div class="col-2"></div>
                        <div class="col-1"></div>
                        <div class="col-9">2- प्रस्तावित निर्माण क्षेत्रफल ( कारपेट) भूतल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_bhutal;?></span> वर्गमीटर एवं प्रथमतल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_pratham_tal;?></span> वर्गमीटर कुल निर्माण क्षेत्रफल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_total;?></span> वर्गमीटर</div>
                        <div class="col-2"></div>
                        <div class="col-1"></div>
                        <div class="col-9">3- स्वी.अनु.राशि(रू.लाखमे):- <br>  केन्द्रांश <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_kendransh;?></span> राज्यांश  <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_rajayansh;?></span> कुल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_all_total;?></span> लाख रू</div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <h6 align="center" class="m-0"> भवन  अनुज्ञा हेतु स्थल निरीक्षण प्रतिवेदन</h6>
                    </div>
                    <div class="row pb-2">
                        <div class="col-1"></div>
                        <div class="col-9">
                            1- आवेदित स्थल भारत सरकार एवं राज्य शासन के दिशा निर्देशानुसार BLC घटक “मोर
                            जमीन-मोर मकान” के क्रियान्वयन हेतु सभी दृष्टिकोण से उपर्युक्त है तथा आवेदित स्थल हेतु
                            पहुँच मार्ग की चौड़ाई <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_marg_width;?></span> मी. है
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-1"></div>
                        <div class="col-9">
                            2- आवेदित स्थल जोन क्र. - ……......वार्ड क्रमांक <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?></span> मोहल्ला <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_gram_name;?></span> मेँ  स्थित है |
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-1"></div>
                        <div class="col-9">
                            3- भूखण्ड स्वामित्व का   विवरण :- निजी स्वामित्व / स्थायी पट्टा /आबादी 
                            अ. आवेदक के स्वामित्व में <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_gram_name;?></span> ग्राम की खसरा क्र <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_khasra_no;?></span> रकबा ................ 
                            क्षेत्रफल <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bhukhand_sq;?></span> वर्ग मीटर भूमि है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            ब. आवेदक को शासन के द्वारा ................. ग्राम/स्थल वार्ड क्र. ....... में वर्श 4998,2002,
                            2048 में 30 वर्षीय पटूटा क्र. .......... क्षेत्रफल .................. वर्ग मीटर,/फीट का प्रदाय किया गया
                            है। भूखण्ड, मार्ग, नाली, विद्युत प्रमाव से मुक्त प्रभावित है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            4- <strong>भूखण्ड चौहदूदी </strong>:-
                            <div class="row">
                                <div class="col-6">उत्तर :- .......................................... </div>
                                <div class="col-6">पूर्व ………………………………</div>
                                <div class="col-6">दक्षिण :- .... ………………………..  </div>
                                <div class="col-6">पश्चिम ……………………………</div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            टीप :- रोड की चौड़ाई 3.5 मीटर से कम होने पर रोड की लंबाई .......................... मीटर है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            5- वर्तमान में आवेदित स्थल पर पक्का भवन निर्माण है,/नहीं है तथा शौचालय निर्मित है/नहीं है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            (अ) प्रस्तावित निर्माण 
                            <div class="row">
                                <div class="col-12">1- भूतल क्षेत्रफल :- ……………… वर्गमीटर कॉरपेट क्षेत्रफल ………………………….... वर्गमीटर</div>
                                <div class="col-12">2- प्रथम तल क्षेत्रफल :- …………..वर्गमीटर कॉरपेट क्षेत्रफल ……………………………..वर्गमीटर</div>
                                <div class="col-12">प्रस्तावित निर्माण का योग ................. वर्गगीटर कॉरपेट क्षेत्रफल……………………………. वर्गमीटर</div>
                                <div class="col-12">(व) सेटवैक :- सामने………………... मीटर, ... ......... दांये ………...मीटर,</div>
                                <div class="col-12">(सं) कव्हरेज :- ......... ....... प्रतिशत, (द) एफ.एं.आर :-........</div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            6- आवेदक द्वारा भाषथ पत्र क्षतिपूर्ति बंध पत्र पट्‌टा/रजिस्ट्री प्रति, मानचित्र 05 प्रति प्रस्तुत किया है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            7- भूमि रहन,/विक्री / अनुबंध किए जाने पर निरस्त योग्य है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            8- भू-स्वामित्व संबंधी किसी प्रकार का विवाद होने पर प्रदत्त अनुज्ञा स्वयंमेव निरस्त मानी जावेगी।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            9- नगर निगम से संबंधित भुल्क भासन के निर्देश गनुसार  देय होगा ॥
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <style>
                    </style>
                        <div class="col-9">
                            10-आवेदित स्थल जो स्थायी गंदी बस्ती (Tenable/ निजि मोहल्ला  / वैध-कॉलोनी / अवैध-कॉलोनी) में
                            स्थित है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            11- निर्मित होने वाला मकान वॉटर बॉड़ी,ग्रीन बेल्ट से प्रभावितु.हैं,/ नहीं है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            12- भूखण्ड क्षेत्र से विद्युत लाईन (HT, LT) की दूँरी <span class="sent-size"><?php echo $a_value[0]->m_htlt_distance;?></span> मीटर है।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-1"></div>
                        <div class="col-9">
                            13- अतः उपरोक्तानुसार स्थल निरीक्षण उपरांत स्वीकृति हेतु सादर प्रस्तुत।
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-1"></div>
                        <div class="col-5">सहायक अभियंता </div>
                        <div class="col-4"> उपअभियंता</div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
        <!--#######################################################################################################-->
        <!--2nd Page-->
        <section>
            <div class="container">
                <h5 align="center">   कार्यालय, नगर पालिक निगम, भिलाई-चरौदा, जिला-दुर्ग (छ.ग.)</h5>
                <div class="form pt-1">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th colspan="3">विषय : “प्रधानमंत्री आवास योजना - “मोर जमीन मोर मकान” के तहत्‌ भवन अनुज्ञा।
                                    ……………………………………………………………………………………………………………..
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">दिनांक  </th>
                                <th scope="col"> टीप, आदेश, संक्षिप्त  विवरण   </th>
                                <th scope="col">विशेष</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    पूर्व पृष्ट से -
                                    नस्ती के पूर्व पृष्ट में उल्‍लेखित विवरण अनुसार भवन अनुज्ञा एवं   प्रधानमंत्री आवास योजना अंतर्गत आवास निर्माण की स्वीकृति प्रपत्र आलोकनार्थ एवं  हस्ताक्षरार्थ सादर प्रस्तुत है। <br>
                                    <div class="row border-bottom pt-5 pb-25 mb-5">
                                        <span class="col-8"><b>सहायक अभियंता   </b></span>          
                                        <span class="col-4"><b>  लिपिक <br> उप-अभियंता   </b></span>  
                                    </div>
                                    <div class="row pb-3 ">
                                        <div class="col-6 ">
                                            क्रमांक /...............// न-पा-नि. / 2021                                           
                                        </div>
                                        <div class="col-6">
                                            मिलाई-चरौदा, दिनांक - ......./ ....... 2021
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-12">प्रति, <br><br>       
                                            <span>………………………………………………………..</span> <br> 
                                            <span>………………………………………………………..</span>  <br>
                                            <span>………………………………………………………..</span>  <br>
                                        </div>
                                    </div>
                                    <div class="row pb-3 mt-5">
                                        <div class="col-6 ">
                                            पू.क्र./.................-./ न-पोनि-// 2021                                        
                                        </div>
                                        <div class="col-6">
                                            भिलाई-चरौदा; दिनांक -………..../……../2021
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">1- महापौर, नगर पालिक निगम, भिलाई-चरौदां की ओर सूचनार्थ।</div>
                                        <div class="col-12">2- समापति, नगर पालिक निगम, भिलाई-चरौदा की ओर सूचनार्थ।</div>
                                        <div class="col-12"> 3- श्री;/श्रीमंती <span>....................................................…….</span>  पार्षद, वार्ड -<span>………..</span> न.पा.नि. भिलाई-चरौदा, की ओर सूचनार्थ।</div>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <footer></footer>
        <!--3rd Page-->
        <!--#############################################################################################################-->
        <section class="f-size">
            <div class="container">
                <h5 align="center" class="border-bottom">   कार्यालय, नगर पालिक निगम, भिलाई-चरौदा, जिला-दुर्ग (छ.ग.)</h5>
                <div class="form pt-1">
                    <div class="row">
                        <div class="col-6">क्र... /…......./ PMAY-BLC/ <?php echo date('Y');?> </div>
                        <div class="col-6">  भिलाई-चरौदा, दिनांक - ......./....../ <?php echo date('Y');?></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            प्रति
                        </div>
                        <div class="col-8 text-center">श्री/ श्रीमती <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?></span>,</div>
                        <div class="col-8 text-center">पिता / पति <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_father_husb_name_hindi;?></span>,</div>
                        <div class="col-8 text-center">आधार नंबर <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_adhar_no;?></span>,</div>
                        <div class="col-8 text-center">वार्ड क्र./पता <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?></span>,</div>
                        <div class="col-8 text-center">खाता क्र <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bank_acc_no;?></span>,</div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <b>विषय</b>    :-     “प्रधानमंत्री आवास योजना-सबके लिए आवास मिशन” के घटक लामार्थी आधारित आवास निर्माण (BLC) अंतर्गत आवास निर्माण की स्वीकृति के संबंध में।
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">
                            <b>संदर्भ</b>    :-  आपके द्वारा दी गई सहमति एवं भवन-अनुज्ञा आवेदन दिनांक <span>..<?php echo date('d-m-Y');?>..</span>
                            विषयांतर्गत “प्रधानमंत्री आवास योजना-सबके लिए आवास मिशन” के घटक लामार्थी आधारित आवास निर्माण (BLC) अंतर्गत “मोर जमीन-मोर मकान” के तहत्‌ <span>..<?php echo $a_value[0]->m_csmc;?>..</span>आवास नव निर्माण हेतु प्रेषित डी.पी,आर, को  दिनांक<span>............</span> को SLMC  एवं भारत सरकार द्वरा CSMC बैठक दिनांक <span>............</span> में स्वीकृत किया गया। योजनांतर्गत आपके द्वारा प्रस्तुत भूमि स्वामित्व अभिलेखों एवं जानकारी के आधार पर मिशन अंतर्गत ग्राम <span>............</span>वार्ड क्र. <span><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?></span></span> में स्वयं के निजी स्वामित्व,/स्थायी पट्‌टा,/आबादी वर्तमान भूमि पर ख. क्र./भू.क्र.-<span>.............</span>रकबा <span>............</span>क्षेत्रफल<span><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bhukhand_sq;?></span></span>वर्ग मीटर,/फीट स्वयं के निजी स्वामित्व,/स्थायी पट्टा,/आबादी वर्तमान भूमि पर
                            पक्का आवास निर्माण की निम्नानुसार स्वीकृति दी गई है :-
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered border-primary">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >1</td>
                                    <td>प्रोजेक्ट कोड.</td>
                                    <td colspan="2"> <span class="sent-size">&nbsp;[<?php echo $a_value[0]->m_project_code;?>.... (DPR-<?php echo $a_value[0]->m_csmc;?> )</span></td>
                                </tr>
                                <tr>
                                    <td >2</td>
                                    <td> हितग्राही आईडी</td>
                                    <td>  </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3"> आवास निर्माण हेतु स्वीकृत
                                        कारपेट क्षेत्रफल (वर्ग मी.में)
                                    </td>
                                    <td>भूतल</td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_bhutal;?></span></td>
                                </tr>
                                <tr>
                                    <td>प्रथम तल</td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_pratham_tal;?></span></td>
                                </tr>
                                <tr>
                                    <td>योग</td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_prastavit_total;?></span></td>
                                </tr>
                                <tr>
                                    <td rowspan="5">4</td>
                                    <td rowspan="5">  स्वीकृत राशि (रू, लाख में) </td>
                                </tr>
                                <tr>
                                    <td>केन्द्रांश</td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_kendransh;?></td>
                                </tr>
                                <tr>
                                    <td>राज्यांश </td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_rajayansh;?></span></td>
                                </tr>
                                <tr>
                                    <td>हितग्राही अंहितग्राही अंश </td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_hitgrahi_aansh;?></span></td>
                                </tr>
                                <tr>
                                    <td>योग</td>
                                    <td><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_all_total;?></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                            if(!empty($a_value)){
                              if(!empty($a_value[0]->m_project_code)){
                                $this->db->select('*');
                                $this->db->where('m_project_code',$a_value[0]->m_project_code);
                                $project = $this->db->get('master_project_tbl')->result();
                                if(!empty($project)){
                                  $m_project_engineer = $project[0]->m_project_engineer;
                                }
                                else{
                                  $m_project_engineer ='';
                                }
                              }
                              else{
                                $m_project_engineer ='';
                              }
                            } 
                            ?>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            आवास निर्माण क॑ पूर्व मिशन के दिशा-निर्देशों में निहित प्रावधान के तहत्‌ स्वीकृति संबंधी प्राथमिक कार्यवाही किया जाना आवश्यक है। जिसके लिए वास्तुविद/इंजीनियर्स में <span><span class="sent-size">&nbsp;<?php echo $m_project_engineer;?></span></span>  को अधिकृत
                            किया गया है, जिनके द्वारा आपके भूमि स्वामित्व दस्तावेज अनुसार प्रस्तुत भवन अनुज्ञा आवेदन एवं संलग्न मानचित्र अनुसार
                            नवन निर्माण की स्वीकृति प्रदान की जाती है। अनुबंधित आर्किटेक्ट /इंजीनियर्स के सहयोग से आवास निर्माण कार्य एक
                            सप्ताह की समयावधि में प्रारंग किया जावे।
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            शासन द्वारा स्वीकृत फर्शी क्षेत्रफल दर अनुसार ही वास्तविक निर्माण के आधार पर अंतिम भुगतान किया जाएगा।
                            कुछ महत्वपूर्ण बिन्दु जिसका नियमानुसार पालन करना अनिवार्य होगा :-
                            <ul>
                                <li>हितग्राही को PMAY के घटक “मोर ज़मीन-मोर मकान“ अन्तर्गत मकान निर्माण संबंधी नियमों का पालन करना होगा।</li>
                                <li>किसी भी असत्य जानकारी के लिए हितग्राही स्वयं ज़िम्मेदार होगा। है</li>
                                <li>स्वीकृत मानचित्र के अनुसार ही निर्माण, कार्य किया ज़ाना </li>
                                <li>उक्त स्थल/स्वामित्व पर विवाद संबंधी किसी भी. प्रकार की दावा, आपत्ति के -लिए हितग्राही स्वयं ज़िम्मेदार होगा एवं ऐसी स्थिति में अनुज्ञा निरस्त माना जावेगा।</li>
                            </ul>
                            <div style="text-align: right; margin-top: -10px" class="col-12">
                                सहायक अभियंता<br>
                                नगर पालिक निगम<br>
                                मिलाई-चरौदां<br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            पृ, क्र. .../PMAY-BLC/ 2021
                        </div>
                        <div class="col-6">
                            भिलाई-चरौदा, दिनांक -.. ............./ 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <br>
                            प्रतिलिपि :-
                        </div>
                        <div class="col-12">
                            1. महापौर, नगर पालिक निगम, मिलाई--चरौदा की ओर, सूचनार्थ।
                        </div>
                        <div class="col-12">2. समापति, नगर पालिक निगम, भिलाई-चरौदा की ओर सूचनार्थ |</div>
                        <div class="col-12">3. श्री <span>.................</span><span>.................</span>-----------« नगर 'पालिक निगम, भिलाई-चरौदा की ओर सूचनार्थ।</div>
                        <div class="col-12">4. में, ........................... (वास्तुंविंद / इंजीनियर्स) को सूचनार्थ |</div>
                        <div style="text-align: right;" class="col-12">
                            सहायक अभियंता<br>
                            नगर पालिक निगम<br>
                            मिलाई-चरौदा<br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
        <!--4th Page-->
        <!--#############################################################################################################-->
        <section>
            <div class="container">
                <h5 align="center" class="border-bottom">भवन  की अनुमति के लिए स्थल निरीक्षण रिपोर्ट</h5>
                <div class="form pt-1">
                    <div class="row pb-1">
                        <div class="col-12">रजिस्टर्ड  आशिटेए्ट / इंजीनियर/एजेंसी <span class="sent-size">&nbsp;<?php echo $m_project_engineer;?></span> और भूखण्ड  /भूमि  के मालिक द्वारा प्रभाणित हस्ताक्षर किए गए।</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">1-प्रस्ताव आवेदन क़मांक  <span>......................................</span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">2- आवेदक का नाम :- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?></span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">3- स्थल पिरीक्षण जा दिनांक :-............................................................</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">4- वार्ड का नाम/ क़मांक / ग्राम का नाम:- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?></span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">5- भूमि की स्थिति स्वीकृति अभिव्यास/विकास योजना के अनुसार :- ………………………………………………....</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">6- स्थल पर कच्चा/पक्‍का रोड उपलब्ध है या नहीं :- <span class="sent-size">&nbsp;हाँ</span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">7- भूखण्ड के सस्सुख भार्ग की चौड़ाई (दीवार से दीवार तक मीटर में) यदि मार्ग भूखण्ड के दूसरे पक्षों पर  है तो मार्ग की चौड़ाई का उल्लेख करें :- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_marg_width;?> वर्गमीटर </span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">8-प्रशनाधीन भूमि  का विकास अनुज्ञा स्वीकृत नहीं है ,परन्तु चित्र का विकास (सड़क ,नाली,विध्युत ) किया गया है  <span class="sent-size">&nbsp;हाँ</span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">9- एच. टी. लाईन स्थल के आसपास है या नहीं हों तो एच. टी. लाईन के स्थल की दूरी मीटर में<span class="sent-size">&nbsp;<?php echo $a_value[0]->m_htlt_distance;?> </span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12"> 10- प्राकृतिक नाला (प्रमुख नाला) स्थल के निकट हैं या नहीं, यदि हाँ तो नाला से स्थल का दूरी मीटर में :- <span class="sent-size">&nbsp; नहीं</span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">11-स्थल पर वर्तमान तथा प्रस्तावति विकास का विवरण और उपयोग :- आवासीय</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12"> 11.1 अनुमोदन से पहले स्थल पर विकास कार्य शुरू किया गया है कि नहीं :- ....हाँ....</div>
                        <div class="col-12"> 11.2 बिल्डिंग प्लान के अनुमोदन से पहले प्रस्तुत मानचित्र के अनुसार स्थल पर बिल्डिंग का कार्य
                            पूर्ण हो गया है॥(हाँ/नहीं), यदि हाँ तो किस स्तर तक :-<span class="sent-size">&nbsp;नहीं</span>
                        </div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">12-क्या भवन निर्माण की अनुमति ली गई है, यदि हाँ तो अनुमति का वर्श तथा विवरण का उल्लेख करें। <span>(हाँ / नहीं) :- --</span></div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">13. प्रस्तावित निर्माण -</div>
                        <div class="col-12">1 भूतल क्षेत्रफल. :- <span>........................</span> वर्गगीटर कॉरपेट क्षेत्रफल <span>........................</span> वर्गमीटर</div>
                        <div class="col-12">2 प्रथम तल क्षेत्रफल :- <span>........................</span> वर्गमीटर कॉरपेट क्षेत्रफल <span>...................</span> वर्गमीटर</div>
                        <div class="col-12">प्रस्तावित निर्माण का योग ५-<span>........................</span> वर्गमीटर कॉरपेट क्षेत्रफल <span>........................</span> वर्गमीटर</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">14- स्वीकृत तथा वर्तमान सैटबैक सामने :-............................................................................</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">15- स्वीकृत तथा वर्तमान सैटबैक पीछे :-.......................................................</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">16- स्वीकृत तथा वर्तमान सैटबैक बाजू :-...............................................................</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">17-  स्वीकृत तथा वर्तमान   सैटबैक. दूसरे बाजू - : ……………………………………………………</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">18- कवरेज :-<span>...................</span>  प्रतिशत, एफ.ए.आर <span>...................</span> .</div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">19- प्रस्तावित स्थल बाहरी एजेंसियों अर्थात्‌ रेलवे नियामक प्राधिकरण, भारतीय विमान पत्तन प्राधिकरण के विनियमिति क्षेत्र में है <span>(हाँ //नहीं)</span>....नहीं.....  </div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12">   मेरे द्वारा स्थल निरीक्षण किया गया तथा रिपोर्ट तैयार,/सत्यापित किया जाता है, मुझे पता है
                            कि उपरोक्त विवरणों में से कोई भी असत्य पाया जाता है, तो मेरा आवेदन / प्रस्ताव को अस्वीकार कर
                            दिया जा सकता है और उक्त नियमों के अनुसार प्राधिकरण मुझ पर उचित कार्यवाही कर सकता है।
                        </div>
                        <div class="col-12 pt-2 pb-3">भू-प्लॉट स्वामी का हस्ताक्षर</div>
                    </div>
                    <div class="row ">
                        <div class="col-6">सी.एल.टी-सी. विषेशज्ञ </div>
                        <div class="col-6">एजेंसी / रजिस्टर्ड आर्किटेक्ट / इंजीनियर     </div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
        <!--5th Page-->
        <!--#############################################################################################################-->
        <section>
            <div class="container">
                <h5 align="center" class="border-bottom pb-1 pt-3">   कार्यालय, नगर पालिक निगम, भिलाई-चरौदा, जिला - दुर्ग (छ.ग.)</h5>
                <div class="form pt-3">
                    <div class="row pb-3">
                        <div class="col-12" style="text-align: center;">/ / प्रधानमंत्री आवास योजना-सबक लिये आवास मिशन अन्तर्गत / /
                        </div>
                        <div class="col-12" style="text-align: center;">हितग्राही द्वारा स्वयं आवास निर्माण (BLC) योजना हेतुसहमति-पत्र </div>
                        <div class="col-12" style="text-align: center;">-:::सहमति-पत्र:::-</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-4">1. हितग्राही का नाम :- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?> </span></div>
                        <div class="col-4">उम्र :-....................- </div>
                        <div class="col-4">वर्ष…………………………</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-8">2. पिता का नाम <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_father_husb_name_hindi;?> </span></div>
                        <div class="col-4">मोब नं.- <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_mobile_no;?></span></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">3. हितग्राही का आधार नं, - <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_adhar_no;?></span></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">4. वर्तमान निवास का पता :- <span><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no.', '.$a_value[0]->m_ward_gram_name;?></span></span>  </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">5. प्रस्तावित निर्माण स्थल का विवरण वार्ड क्र. - <span>.............</span>  वार्ड का नाम - <span> <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?></span></span> मोहल्ला -<span> <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_gram_name;?></span></span> </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">6. स्वामित्व विवरण (निजी,/आबादी /“आवासीय स्थायी पट्‌टा,/आवासहीन स्थायी पट्टा) खसरा नं, -<span>....<?php echo $a_value[0]->m_khasra_no;?>.....</span> 
                            नलमासपसास - क्षेत्र - <span><span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bhukhand_sq;?></span></span>  वर्गमीटर 
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">7. भवन अनुज्ञा एवं निर्माण के तकनीकी मार्गदर्शन हेतु आर्किटेक्ट//इंजीनियर का नाम - <span class="sent-size">&nbsp;<?php echo $m_project_engineer;?></span></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">8. प्रस्तावित निर्माण का विवरण :- नव निर्माण,/विस्तार का क्षेत्रफल - <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_bhukhand_sq;?></span> - वर्गमीटर</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">9. प्रस्तावित निर्माण की अनुमानित लागत राशि रू, - <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_all_total;?></span> </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">10.अनुदान: (अ) भारत सरकार द्वारा राशि रू, - <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_kendransh;?></span> (ब ) राज्य साशन द्वारा राशि रु <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_rajayansh;?></span></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">
                            योजना की स्वीकृति उपरान्त मेरे द्वारा नियमानुसार भवन निर्माण कार्य करने हेतु उक्तानुसार
                            हितग्राही द्वारा अंशदान के रूप में राशि की व्यवस्था स्वयं करते हुए कार्य प्रारंभ करने हेतु सहमति दी जाती है।
                        </div>
                    </div>
                    <div class="row pb-3 pt-5">
                        <div class="col-6" style="text-align: left;">स्थान ………………………………………………………………</div>
                        <div class="col-6" style="text-align: right;">हितग्राही के हस्ताक्षर :- ……………........ </div>
                        <div class="col-12 pt-3">दिनांक…………………………………………………………</div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
        <!--6th Page-->
        <!--#############################################################################################################-->
        <section>
            <div class="container">
                <?php
                $varsh = (rand(6,8));
                $income = (rand(10000,300000));
                ?>
                <h3 align="center" class="border-bottom">/ / शपथ - पत्र / /</h3>
                <div class="form pt-3">
                    <div class="row pb-3">
                        <div class="col-12">मैं शपथकर्ता/शपथकर्ती <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_name_hindi;?></span>............................................................................................</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-4">पिता / पति-  <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_father_husb_name_hindi;?></span></div>
                        <div class="col-8"> निवासी /शहर - <span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_gram_name;?></span></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">वार्ड क्र. -<span class="sent-size">&nbsp;<?php echo $a_value[0]->m_ward_no;?>&nbsp;जिला- दुर्ग (छ-ग-) जो कि निम्न -कथन  शपथ पूर्वक प्रस्तुत करता / करती हूँ। </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">1. यह कि मेरे व मेरे परिवार के किसी भी सदस्य के नाम से भारत में कहीं भी पक्का मकान नहीं है।</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">2. यह कि मैं विगत <span class="sent-size">&nbsp;<?php echo $varsh;?></span>  वर्षों से नगरीय निकाय की सीमा में वर्ष - <span>............</span>   से दिनांक - <span>............</span>  से निवासरत हूँ।</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">3. मैंनें किसी भी अन्य शासकीय योजना के मकान प्राप्त नहीं किया है।</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">4. यह कि मेरे समग्र पारिवारिक वार्षिक आय राशि रू, <span class="sent-size">&nbsp;<?php echo $income;?></span> है।
                        </div>
                    </div>
                    <h4 align="center" class="pb-2 pt-5">/ / सत्यापन / /</h4>
                    <div class="row pb-3">
                        <div class="col-12">मैं शपथ करता,/ करती हूँ कि उपरोक्त जानकारी पूर्णतः सत्य है।</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">स्थान ………………………………………………………………………</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">दिनांक……………………………………………………………………...</div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
        <input type="hidden" id="app_id" value="<?php echo $app_id;?>">
    </body>
    <script src="<?php echo base_url('assets/buildingprint/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/buildingprint/js/bootstrap.min.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
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
             url:'<?php echo base_url("Document/first_time_buiding_print");?>',
             dataType  : 'json',  
             data:
             {
               app_id:app_id,
             },
             success: function(data){
               
             }
          });
        });
    </script>
</html>