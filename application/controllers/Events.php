<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Events extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "All Events";
  $data['all_value'] = $this->Main_model->get_all_events();
  $this->load->view('admin_events', $data);
}
public function add_events(){ $data = $this->login_details();
  $data['pagename'] = "Add Event";
  $this->load->view('admin_add_event', $data);
}
public function edit_events(){ $data = $this->login_details();
  $data['pagename'] = "Edit Event";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_event($data['id']);
  $this->load->view('admin_edit_events', $data);
}
public function insert_events(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_events()){
      $info = array( 'status'=>'success',
        'message'=>'Event has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_events(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_events()){
      $info = array( 'status'=>'success',
        'message'=>'Event has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_events(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_events()){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some Problem Occured'
      );
    } echo json_encode($info);
  }
}
public function videos(){ $data = $this->login_details();
  $data['pagename'] = "All Videos";
  $data['all_value'] = $this->Main_model->get_all_videos();
  $this->load->view('admin_video', $data);
}
public function add_video(){ $data = $this->login_details();
  $data['pagename'] = "Add Video";
  $this->load->view('admin_add_video', $data);
}
public function edit_video(){ $data = $this->login_details();
  $data['pagename'] = "Edit Video";
  $data['id'] = $this->input->get('id');
  $data['a_value'] = $this->Main_model->get_a_video($data['id']);
  $this->load->view('admin_edit_video', $data);
}
public function insert_video(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->insert_video()){
      $info = array( 'status'=>'success',
        'message'=>'Video has been Added successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function update_video(){
 if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Main_model->update_video()){
      $info = array( 'status'=>'success',
        'message'=>'Video has been update successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
public function delete_video(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->Main_model->delete_video()){
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