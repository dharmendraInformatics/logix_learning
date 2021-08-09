<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Document extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All Documents";
  $data['all_value'] = $this->Main_model->get_all_documents();
  $this->load->view('admin_documents', $data);
}

public function add_document(){ $data = $this->login_details();
  $data['pagename'] = "Add Document";
  $this->load->view('admin_add_documents', $data);
}
public function edit_document(){ $data = $this->login_details();
  $data['pagename'] = "Edit Document";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_document($data['id']);
  $this->load->view('admin_edit_document', $data);
}
public function insert_document(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_documents()){
      $info = array( 'status'=>'success',
        'message'=>'Document has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_document(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_documents()){
      $info = array( 'status'=>'success',
        'message'=>'Document has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_document(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_document()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
public function aavas_yojna_applicant(){ $data = $this->login_details();
  $data['pagename'] = "सभी आवेदन"; 
  $data['all_value'] = $this->Main_model->get_all_aavas_yojna_applicant();
  $this->load->view('aavas_yojna_applicant', $data);
}
public function add_aavas_yojna_application(){ $data = $this->login_details();
  $data['pagename'] = "आवेदन जोडे";
  $this->load->view('add_aavas_yojna_application', $data);
}
public function print_aavas_yojna_application(){ $data = $this->login_details();
  $data['pagename'] = "प्रिंट आवेदन";
  $data['app_id'] =  $this->input->get('app_id');
  $data['a_value'] = $this->Main_model->get_aavas_yojna_applicant($data['app_id']);
  $this->load->view('print_aavas_yojna_application', $data);
}
public function print_praman_patra(){ $data = $this->login_details();
  $data['pagename'] = "प्रिंट प्रिंट प्रमाण पत्र";
  $data['app_id'] =  $this->input->get('app_id');
  $data['a_value'] = $this->Main_model->get_aavas_yojna_applicant($data['app_id']);
  $this->load->view('print_praman_patra', $data);
}
public function print_bhavan_anuggya(){ $data = $this->login_details();
  $data['pagename'] = "प्रिंट भवन अनुज्ञा";
  $data['app_id'] =  $this->input->get('app_id');
  $data['a_value'] = $this->Main_model->get_aavas_yojna_applicant($data['app_id']);
  $this->load->view('print_bhavan_anuggya', $data);
}
public function aavas_yojna_applicant_details(){ $data = $this->login_details();
  $data['pagename'] = "प्रमाण पत्र सभी विवरण";
  $data['app_id'] =  $this->input->get('app_id');
  $data['a_value'] = $this->Main_model->get_aavas_yojna_applicant($data['app_id']);
  $this->load->view('aavas_yojna_application_details', $data);
}
public function aavas_bhavan_anuggya_details(){ $data = $this->login_details();
  $data['pagename'] = "भवन अनुज्ञा सभी विवरण";
  $data['app_id'] =  $this->input->get('app_id');
  $data['a_value'] = $this->Main_model->get_aavas_yojna_applicant($data['app_id']);
  $this->load->view('aavas_bhavan_anuggya_details', $data);
}
public function import_application(){
    $imp_file = $_FILES['import_file'];
    $mdata = array();
    if(!empty($imp_file)){
      require_once "Simplexlsx.class.php";
      $xlsx = new SimpleXLSX($_FILES['import_file']['tmp_name'] );
      list($cols,$rows) = $xlsx->dimension();
      $i=0;
      foreach($xlsx->rows() as $row) 
      {
        $i++; 
        if($i!= 1){
          if(!empty($row[12])){
            $m_ward_no = $row[12];
            $this->db->select('*');
            $this->db->where('m_ward_no',$m_ward_no);
            $ward = $this->db->get('master_ward_number_tbl')->result();
            if(!empty($ward)){
              $m_ward_address = $ward[0]->m_ward_gram_name;
            }
            else{
              $m_ward_address ='';
            }
          }
          else{
            $m_ward_no = '0';
          }
          if(!empty($row[3])){
            $excel_date = $row[3];
            $unix_date = ($excel_date - 25569) * 86400;
            $excel_date = 25569 + ($unix_date / 86400);
            $unix_date = ($excel_date - 25569) * 86400;
            $m_csmc_date = gmdate("Y-m-d", $unix_date);
          }
          else{
           $m_csmc_date ='0000-00-00'; 
          }

          if(!empty($row[4])){
            $excel_date1 = $row[4];
            $unix_date1 = ($excel_date1 - 25569) * 86400;
            $excel_date1 = 25569 + ($unix_date1 / 86400);
            $unix_date1 = ($excel_date1 - 25569) * 86400;
            $m_slsmc_date = gmdate("Y-m-d", $unix_date1);
          }
          else{
           $m_slsmc_date ='0000-00-00'; 
          }

          if(!empty($row[5])){
            $excel_date2 = $row[5];
            $unix_date2 = ($excel_date2 - 25569) * 86400;
            $excel_date2 = 25569 + ($unix_date2 / 86400);
            $unix_date2 = ($excel_date2 - 25569) * 86400;
            $m_swkriti_date = gmdate("Y-m-d", $unix_date2);
          }
          else{
           $m_swkriti_date ='0000-00-00'; 
          }

          if(!empty($row[30])){
            $m_kendransh = $row[30];
          }
          else{
            $m_kendransh =0;
          }
          if(!empty($row[31])){
            $m_rajayansh =$row[31];
          }
          else{
            $m_rajayansh = 0;  
          }
          if(!empty($row[32])){
            $m_hitgrahi_aansh =$row[32];
          }
          else{
            $m_hitgrahi_aansh = 0;  
          }
          if(!empty($row[17])){
            $m_bhumi_type =$row[17];
          }
          else{
            $m_bhumi_type = 'आवासीय'; 
          }
          if(!empty($row[20])){
            $m_aavas_isthiti =$row[20];
          }
          else{
            $m_aavas_isthiti = 'कच्चा'; 
          }
          
          $m_all_total = $m_kendransh + $m_rajayansh + $m_hitgrahi_aansh;

          $m_htlt_distance = mt_rand (3*10, 3.5*10) / 10;

          $ins_data = array();
          $ins_data['m_project_code']    = $row[1];      
          $ins_data['m_csmc']            = $row[2];
          $ins_data['m_csmc_date']            = $m_csmc_date;
          $ins_data['m_slsmc_date']            = $m_slsmc_date;
          $ins_data['m_swkriti_date']    = $m_swkriti_date;
          $ins_data['m_name_hindi']      = $row[6];
          $ins_data['m_father_husb_name_hindi']      = $row[7];
          $ins_data['m_adhar_no']      = $row[8];
          $ins_data['m_bank_name']      = $row[9];
          $ins_data['m_bank_acc_no']      = $row[10];
          $ins_data['m_ifsc_code']      = $row[11];
          $ins_data['m_ward_no']      = $m_ward_no;
          $ins_data['m_ward_address']      = $m_ward_address;
          $ins_data['m_mobile_no']      = $row[13];
          $ins_data['m_survey_id']      = $row[14];
          $ins_data['m_is_attached']      = $row[15];
          $ins_data['m_khasra_no']      = $row[16];
          $ins_data['m_bhumi_type']      = $m_bhumi_type;
          $ins_data['m_bhukhand_sq']      = $row[18];
          $ins_data['m_marg_width']      = $row[19];
          $ins_data['m_aavas_isthiti']      = $m_aavas_isthiti;
          $ins_data['m_existing_infra']      = $row[21];
          $ins_data['m_is_shauchalaye']      = $row[22];
          $ins_data['m_is_toilet_proposed']      = $row[23];
          $ins_data['m_prastavit_bhutal']      = $row[24];
          $ins_data['m_prastavit_pratham_tal']      = $row[25];
          $ins_data['m_prastavit_total']      = $row[26];
          $ins_data['m_proposed_ground']      = $row[27];
          $ins_data['m_proposed_first']      = $row[28];
          $ins_data['m_proposed_total']      = $row[29];
          $ins_data['m_kendransh']      = $m_kendransh;
          $ins_data['m_rajayansh']      = $m_rajayansh;
          $ins_data['m_hitgrahi_aansh']      = $m_hitgrahi_aansh;
          $ins_data['m_all_total']      = $m_all_total;
          $ins_data['m_htlt_distance']      = $m_htlt_distance;



          $upd_data = array();
          $upd_data['m_project_code']    = $row[1];      
          $upd_data['m_csmc']            = $row[2];
          $upd_data['m_csmc_date']            = $m_csmc_date;
          $upd_data['m_slsmc_date']            = $m_slsmc_date;
          $upd_data['m_swkriti_date']    = $m_swkriti_date;
          $upd_data['m_name_hindi']      = $row[6];
          $upd_data['m_father_husb_name_hindi']      = $row[7];
          $upd_data['m_adhar_no']      = $row[8];
          $upd_data['m_bank_name']      = $row[9];
          $upd_data['m_bank_acc_no']      = $row[10];
          $upd_data['m_ifsc_code']      = $row[11];
          $upd_data['m_ward_no']      = $m_ward_no;
          $upd_data['m_ward_address']      = $m_ward_address;
          $upd_data['m_mobile_no']      = $row[13];
          $upd_data['m_survey_id']      = $row[14];
          $upd_data['m_is_attached']      = $row[15];
          $upd_data['m_khasra_no']      = $row[16];
          $upd_data['m_bhumi_type']      = $m_bhumi_type;
          $upd_data['m_bhukhand_sq']      = $row[18];
          $upd_data['m_marg_width']      = $row[19];
          $upd_data['m_aavas_isthiti']      = $m_aavas_isthiti;
          $upd_data['m_existing_infra']      = $row[21];
          $upd_data['m_is_shauchalaye']      = $row[22];
          $upd_data['m_is_toilet_proposed']      = $row[23];
          $upd_data['m_prastavit_bhutal']      = $row[24];
          $upd_data['m_prastavit_pratham_tal']      = $row[25];
          $upd_data['m_prastavit_total']      = $row[26];
          $upd_data['m_proposed_ground']      = $row[27];
          $upd_data['m_proposed_first']      = $row[28];
          $upd_data['m_proposed_total']      = $row[29];
          $upd_data['m_kendransh']      = $m_kendransh;
          $upd_data['m_rajayansh']      = $m_rajayansh;
          $upd_data['m_hitgrahi_aansh']      = $m_hitgrahi_aansh;
          $upd_data['m_all_total']      = $m_all_total;
          $upd_data['m_htlt_distance']      = $m_htlt_distance;

          $this->db->select('*');
          $this->db->where('m_adhar_no',$row[8]);
          $check = $this->db->get('aavas_yojna_application_tbl')->result();
          if(!empty($check)){
            $this->db->where('m_adhar_no',$row[8]);
            $upd = $this->db->update('aavas_yojna_application_tbl',$upd_data);
          }
          else{
            $ins = $this->db->insert('aavas_yojna_application_tbl',$ins_data);
          }
          $mdata['status']    = 1;
          $mdata['message']   = 'Import Successfully';
        }
      }
    }
    echo json_encode($mdata);
}
public function first_time_print(){
  echo $this->Main_model->first_time_print();
}
public function first_time_buiding_print(){
  echo $this->Main_model->first_time_buiding_print();
}
public function checked_print(){
  echo $this->Main_model->checked_print();
}
public function checked_building_print(){
  echo $this->Main_model->checked_building_print();
}
public function delete_aavas_yojna_applicant(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_aavas_yojna_applicant()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
public function all_ward(){ $data = $this->login_details();
  $data['pagename'] = "सभी वार्ड";
  $data['all_value'] = $this->Main_model->get_all_ward();
  $this->load->view('all_ward', $data);
}
public function add_ward(){ $data = $this->login_details();
  $data['pagename'] = "वार्ड नंबर जोडे";
  $data['app_id'] =  $this->input->get('app_id');
  $this->load->view('add_ward', $data);
}
public function insert_ward(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_ward()){
      $info = array( 'status'=>'success',
        'message'=>'Ward has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function edit_ward(){ $data = $this->login_details();
  $data['pagename'] = "वार्ड नंबर अपडेट करें";
  $data['m_ward_id'] =  $this->input->get('ward_id');
  $data['a_value'] = $this->Main_model->get_a_ward($data['m_ward_id']);
  $this->load->view('edit_ward', $data);
}
public function update_ward(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_ward()){
      $info = array( 'status'=>'success',
        'message'=>'Ward has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_ward(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_ward()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
//Project Master
public function all_project(){ $data = $this->login_details();
  $data['pagename'] = "सभी प्रोजेक्ट";
  $data['all_value'] = $this->Main_model->get_all_project();
  $this->load->view('all_project', $data);
}
public function add_project(){ $data = $this->login_details();
  $data['pagename'] = "प्रोजेक्ट जोडे";
  $this->load->view('add_project', $data);
}
public function insert_project(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_project()){
      $info = array( 'status'=>'success',
        'message'=>'Project has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function edit_project(){ $data = $this->login_details();
  $data['pagename'] = "प्रोजेक्ट अपडेट करें";
  $data['m_project_id'] =  $this->input->get('project_id');
  $data['a_value'] = $this->Main_model->get_a_project($data['m_project_id']);
  $this->load->view('edit_project', $data);
}
public function update_project(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_project()){
      $info = array( 'status'=>'success',
        'message'=>'Project has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_project(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_project()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
//Print details

public function all_printed_praman_patra(){ $data = $this->login_details();
  $data['pagename'] = "प्रिंटेड प्रमाण पत्र";
  $data['all_value'] = $this->Main_model->get_all_printed_praman_patra();
  $this->load->view('all_printed_praman_patra', $data);
}
public function all_printed_bhavan_anuggya(){ $data = $this->login_details();
  $data['pagename'] = "प्रिंटेड भवन अनुज्ञा";
  $data['all_value'] = $this->Main_model->get_all_printed_bhavan_anuggya();
  $this->load->view('all_printed_bhavan_anuggya', $data);
}

//==========================Details===========================//
protected function login_details(){ $this->require_login();
  $data['log_user_dtl'] = $this->Login_model->user_details();
  return $data;
}
//=========================/Details===========================//
  
//======================Login Validation======================//
protected function require_login(){
  $is_user_in = $this->session->userdata('is_user_in');
  if(isset($is_user_in) || $is_user_in == true){ return;
  } else { redirect('Login'); }
}

protected function ajax_login(){
  $is_user_in = $this->session->userdata('is_user_in');
  if(isset($is_user_in) || $is_user_in == true){ return true;
  } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
  }
}
//=====================/Login Validation======================//

//===========================/User============================//
} ?>