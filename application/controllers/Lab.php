<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Lab extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "Infrastructure";
  $data['all_value'] = $this->Main_model->get_all_school_lab();
  $this->load->view('admin_school_lab', $data);
}

public function add_school_lab(){ $data = $this->login_details();
  $data['pagename'] = "Add School Infrastructure";
  $data['all_value'] = $this->Main_model->get_all_school_lab_type();
  $data['all_group'] = $this->Main_model->get_all_school_lab_group();
  $this->load->view('admin_add_school_lab', $data);
}
public function edit_school_lab(){ $data = $this->login_details();
  $data['pagename'] = "Edit School Infrastructure";
  $data['id'] = $this->input->get('id');
  $data['all_value'] = $this->Main_model->get_all_school_lab_type();
  $data['all_group'] = $this->Main_model->get_all_school_lab_group();
  $data['a_value'] = $this->Main_model->get_a_school_lab($data['id']);
  $this->load->view('admin_edit_school_lab', $data);
}
public function insert_school_lab(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_school_lab()){
      $info = array( 'status'=>'success',
        'message'=>'School Infrastructure has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_school_lab(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_school_lab()){
      $info = array( 'status'=>'success',
        'message'=>'School Infrastructure has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_school_lab(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_school_lab()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}

public function get_group_type(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $groupid = $this->input->post('groupid');
      $data = $this->db->query("select group_ismenu from master_lab_group where group_id='".$groupid."'")->result();
      echo json_encode($data[0]->group_ismenu);
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