<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Crop extends CI_Controller {
//============================User============================//

//============================User============================//
public function index(){ $data = $this->login_details();
  $data['pagename'] = "Crop Images";
  $data['all_value'] = $this->Main_model->get_all_banner();
  $this->load->view('crop_image', $data);
}
public function insert_image(){
  $insdata =array();
  if(isset($_POST["image"])){
   $data = $_POST["image"];
   $img_array_1 = explode(";", $data);
   $img_array_2 = explode(",", $img_array_1[1]);
   $basedecode = base64_decode($img_array_2[1]);
   $filename = time() . '.jpg';
   file_put_contents("uploads/crop_img/$filename", $basedecode);
   //file_put_contents($filename, $basedecode);
   echo '<img src="uploads/crop_img/'.$filename.'" class="img-thumbnail" />';
   $now = date("Y-m-d H:i:s");
   $insdata['crop_image'] = $filename;
   $this->db->insert('master_crop_image', $insdata);
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