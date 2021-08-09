<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Magazines extends CI_Controller {
//============================Magazines============================//

//============================Magazines============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All Magazines";
  $data['all_value'] = $this->Main_model->get_all_magazines();
  $this->load->view('all_magazines', $data);
}
public function add_magazines(){ $data = $this->login_details();
  $data['pagename'] = "Add Magazine";
  $this->load->view('add_magazines', $data);
}
public function insert_magazines(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_magazines()){
      $info = array( 'status'=>'success',
        'message'=>'Magazine has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function edit_magazines(){ $data = $this->login_details();
  $data['pagename'] = "Edit Magazine";
  $id = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_magazines($id);
  $this->load->view('edit_magazines', $data);
}

public function update_magazines(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_magazines()){
      $info = array( 'status'=>'success',
        'message'=>'Magazine has been Updated successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}



  
public function delete_magazines(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_magazines()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
public function change_status(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->change_status()){
      $info = array( 'status'=>'success',
        'message'=>'Magazine status change successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
//===========================/Magazines============================//

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