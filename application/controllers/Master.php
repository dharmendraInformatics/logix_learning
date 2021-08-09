<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Master extends CI_Controller {
	public function brand_add(){ $data = $this->login_details();
	  $data['pagename'] = "All Brand";
	  $data['ct_id'] = $this->input->get('ct');
	  $data['brands'] = $this->Main_model->all_brands();
	  $this->load->view('brand_add', $data);
	}
	public function brand_edit(){ $data = $this->login_details();
	  $data['pagename'] = "Edit Brand";
	  $data['id'] =$this->uri->segment(3);
	  $data['brands'] = $this->Main_model->all_brands();
	  $data['edit_brand'] = $this->Main_model->edit_brand($data['id']);
	  $this->load->view('brand_edit', $data);
	}
	public function model_add(){ $data = $this->login_details();
	  $data['pagename'] = "All Model";
	  $data['ct_id'] = $this->input->get('ct');
	  $data['model'] = $this->Main_model->all_models();
	  $data['brand'] = $this->Main_model->all_brands();
	  $this->load->view('models_add', $data);
	}
	public function model_edit(){ $data = $this->login_details();
	  $data['pagename'] = "Edit Model";
	  $data['id'] =$this->uri->segment(3);
	  $data['brand'] = $this->Main_model->all_brands();
	  $data['model'] = $this->Main_model->all_models();
	  $data['edit_model'] = $this->Main_model->edit_model($data['id']);
	  $this->load->view('models_edit', $data);
	}
	public function dealer_add(){ $data = $this->login_details();
	  $data['pagename'] = "All Dealer";
	  $data['dealer'] = $this->Main_model->all_dealers();
	  $data['city'] = $this->Main_model->all_city();
	  $this->load->view('dealer_add', $data);
	}
	public function dealer_edit(){ $data = $this->login_details();
	  $data['pagename'] = "Edit Dealer";
	  $data['id'] =$this->uri->segment(3);
	  $data['city'] = $this->Main_model->all_city();
	  $data['dealer'] = $this->Main_model->all_dealers();
	  $data['edit_dealer'] = $this->Main_model->edit_dealer($data['id']);
	  $this->load->view('dealer_edit', $data);
	}
	public function city_add(){ $data = $this->login_details();
	  $data['pagename'] = "All City";
	  $data['city'] = $this->Main_model->all_city();
	  $this->load->view('city_add', $data);
	}
	public function city_edit(){ $data = $this->login_details();
	  $data['pagename'] = "Edit City";
	  $data['id'] =$this->uri->segment(3);
	  $data['city'] = $this->Main_model->all_city();
	  $data['edit_city'] = $this->Main_model->edit_city($data['id']);
	  $this->load->view('city_edit', $data);
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
	public function insert_brand(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->insert_brand()){
	      $info = array( 'status'=>'success',
	        'message'=>'Brand Added Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function update_brand(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->update_brand()){
	      $info = array( 'status'=>'success',
	        'message'=>'Brand update Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function insert_model(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->insert_model()){
	      $info = array( 'status'=>'success',
	        'message'=>'Model Added Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function update_model(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->update_model()){
	      $info = array( 'status'=>'success',
	        'message'=>'Model update Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function insert_city(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->insert_city()){
	      $info = array( 'status'=>'success',
	        'message'=>'City Added Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function update_city(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->update_city()){
	      $info = array( 'status'=>'success',
	        'message'=>'City update Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function insert_dealer(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->insert_dealer()){
	      $info = array( 'status'=>'success',
	        'message'=>'Dealer Added Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function update_dealer(){ $data = $this->login_details();
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->update_dealer()){
	      $info = array( 'status'=>'success',
	        'message'=>'Dealer update Successfully'
	      );
	    }else{ $info = array( 'status'=>'fail',
	        'message'=>'Some Problem Occured Please Try Again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function delete_brand(){ 
	  if ($this->ajax_login() === false) { return; }
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->delete_brand()){
	      $info = array( 'status'=>'success',
	        'message'=>'Brand has been Deleted successfully!'
	      );
	    }else{ $info = array( 'status'=>'error',
	        'message'=>'Some problem Occurred!! please try again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function delete_model(){ 
	  if ($this->ajax_login() === false) { return; }
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->delete_model()){
	      $info = array( 'status'=>'success',
	        'message'=>'Model has been Deleted successfully!'
	      );
	    }else{ $info = array( 'status'=>'error',
	        'message'=>'Some problem Occurred!! please try again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function delete_city(){ 
	  if ($this->ajax_login() === false) { return; }
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->delete_city()){
	      $info = array( 'status'=>'success',
	        'message'=>'City has been Deleted successfully!'
	      );
	    }else{ $info = array( 'status'=>'error',
	        'message'=>'Some problem Occurred!! please try again'
	      );
	    } echo json_encode($info);
	  }
	}
	public function delete_dealer(){ 
	  if ($this->ajax_login() === false) { return; }
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	    if($data = $this->Main_model->delete_dealer()){
	      $info = array( 'status'=>'success',
	        'message'=>'Dealer has been Deleted successfully!'
	      );
	    }else{ $info = array( 'status'=>'error',
	        'message'=>'Some problem Occurred!! please try again'
	      );
	    } echo json_encode($info);
	  }
	}
}