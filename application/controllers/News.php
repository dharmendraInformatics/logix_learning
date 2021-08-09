<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class News extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All News";
  $data['all_value'] = $this->Main_model->get_all_news();
  $this->load->view('admin_news', $data);
}
public function add_news(){ $data = $this->login_details();
  $data['pagename'] = "Add News";
  $this->load->view('admin_add_news', $data);
}
public function edit_news(){ $data = $this->login_details();
  $data['pagename'] = "Edit News";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_news($data['id']);
  $this->load->view('admin_edit_news', $data);
}
public function insert_news(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_news()){
      $info = array( 'status'=>'success',
        'message'=>'News has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_news(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_news()){
      $info = array( 'status'=>'success',
        'message'=>'News has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_news(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_news()){
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