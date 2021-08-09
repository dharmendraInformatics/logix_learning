<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Administration extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All User";
  $data['all_value'] = $this->Main_model->get_all_users();
  $this->load->view('admin_users', $data);
}
public function user_details(){ $data = $this->login_details();
  $data['pagename'] = "User Details";
  $data['id'] = $this->input->get('id');
  $data['all_value'] = $this->Main_model->get_a_user($data['id']);
  $this->load->view('admin_user_details', $data);
}
public function add_user(){ $data = $this->login_details();
  $data['pagename'] = "Add User";
  $this->load->view('admin_add_user', $data);
}
public function edit_user(){ $data = $this->login_details();
  $data['pagename'] = "Edit User";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_user($data['id']);
  $this->load->view('admin_edit_user', $data);
}
public function insert_user(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_user()){
      $info = array( 'status'=>'success',
        'message'=>'User has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_user(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_user()){
      $info = array( 'status'=>'success',
        'message'=>'User has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_user(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_user()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
//===========================/User============================//

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