<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Academic extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All Academic";
  $data['all_value'] = $this->Main_model->get_all_academic();
  $this->load->view('admin_academic', $data);
}

public function add_academic(){ $data = $this->login_details();
  $data['pagename'] = "Add Academic";
  $this->load->view('admin_add_academic', $data);
}
public function edit_academic(){ $data = $this->login_details();
  $data['pagename'] = "Edit Academic";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_academic($data['id']);
  $this->load->view('admin_edit_academic', $data);
}
public function insert_academic(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_academic()){
      $info = array( 'status'=>'success',
        'message'=>'Academic has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_academic(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_academic()){
      $info = array( 'status'=>'success',
        'message'=>'Academic has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_academic(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_academic()){
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