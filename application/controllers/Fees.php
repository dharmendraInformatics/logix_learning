<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Fees extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "Fees Structure";
  $data['all_value'] = $this->Main_model->get_all_school_fees();
  $this->load->view('admin_school_fees', $data);
}

public function add_school_fees(){ $data = $this->login_details();
  $data['pagename'] = "Add School Fees";
  $this->load->view('admin_add_school_fees', $data);
}
public function edit_school_fees(){ $data = $this->login_details();
  $data['pagename'] = "Edit School Calendar";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_school_fees($data['id']);
  $this->load->view('admin_edit_school_fees', $data);
}
public function insert_school_fees(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_school_fees()){
      $info = array( 'status'=>'success',
        'message'=>'School Fees has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_school_fees(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_school_fees()){
      $info = array( 'status'=>'success',
        'message'=>'School Fees has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_school_fees(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_school_fees()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
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