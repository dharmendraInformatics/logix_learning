<?php date_default_timezone_set('Asia/Kolkata');
class User_model extends CI_model {
//============================User============================//

//===========================Profile==========================//
public function update_profile(){

  $update_data = array(
    "m_admin_name"    => $this->input->post('m_admin_name'),
    "m_admin_email"   => $this->input->post('m_admin_email'),
    "m_admin_login_id"=> $this->input->post('m_admin_login_id'),
    "m_admin_pass"    => $this->input->post('m_admin_pass'),
    "m_admin_contact" => $this->input->post('m_admin_contact'),
    "m_admin_img"     => $this->input->post('pre_m_admin_img'),
  );

  if(!empty($_FILES['m_admin_img']['name'])){  
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
    $config['file_name'] = $_FILES['m_admin_img']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('m_admin_img')){
      $uploadData = $this->upload->data();
      
      if (!empty($update_data['m_admin_img'])) { 
        if(file_exists($config['upload_path'].$update_data['m_admin_img'])){
        unlink($config['upload_path'].$update_data['m_admin_img']); /* deleting Image */
      } }

      $update_data['m_admin_img'] = $uploadData['file_name'];

    }
  }

  $this->db->where('m_admin_id', $this->session->userdata('user_id'));
  return $this->db->update('master_admin_tbl',$update_data);
}
public function get_application_settings(){
  $res =$this->db->get('application_setting')->result();
  return $res;
}
public function update_settings(){
    if(!empty($_FILES['app_logo']['name'])){
      $config['file_name'] = $_FILES['app_logo']['name'];
      $config['upload_path'] = '../img';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['app_logo']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('app_logo')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['app_logo'])) { 
          if(file_exists($config['app_logo'].$update_data['app_logo'])){
          unlink($config['upload_path'].$update_data['app_logo']); /* deleting Image */
          } 
        }
        $m_app_logo = $uploadData['file_name'];
      }
    }
    else{
      $m_app_logo =$this->input->post('applogo');
    }
    if(!empty($_FILES['app_icon']['name'])){
      $config['file_name'] = $_FILES['app_icon']['name'];
      $config['upload_path'] = '../img';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['app_icon']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('app_icon')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['app_icon'])) { 
          if(file_exists($config['app_icon'].$update_data['app_icon'])){
          unlink($config['upload_path'].$update_data['app_icon']); /* deleting Image */
          } 
        }
        $m_app_icon = $uploadData['file_name'];
      }
    }
    else{
      $m_app_icon =$this->input->post('appfavicon');
    }
    if(!empty($_FILES['app_banner']['name'])){
      $config['file_name'] = $_FILES['app_banner']['name'];
      $config['upload_path'] = '../img';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['app_banner']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('app_banner')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['app_banner'])) { 
          if(file_exists($config['app_banner'].$update_data['app_banner'])){
          unlink($config['upload_path'].$update_data['app_banner']); /* deleting Image */
          } 
        }
        $m_app_banner = $uploadData['file_name'];
      }
    }
    else{
      $m_app_banner =$this->input->post('appbanner');
    }

     $this->db->set('m_app_value',$this->input->post('app_name'));
     $this->db->where('m_app_key','app_name');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$this->input->post('app_title'));
     $this->db->where('m_app_key','app_title');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$this->input->post('app_email'));
     $this->db->where('m_app_key','app_email');
     $this->db->update('application_setting');


     $this->db->set('m_app_value',$this->input->post('app_mobile'));
     $this->db->where('m_app_key','app_mobile');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$this->input->post('app_address'));
     $this->db->where('m_app_key','app_address');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$m_app_logo);
     $this->db->where('m_app_key','app_logo');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$m_app_icon);
     $this->db->where('m_app_key','app_icon');
     $this->db->update('application_setting');

     $this->db->set('m_app_value',$m_app_banner);
     $this->db->where('m_app_key','app_banner');
     $this->db->update('application_setting');

     return true;
  }
public function update_app(){
  if (!empty($_FILES)) {
    $config['upload_path'] = '../uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['remove_spaces'] = TRUE;
  }
  if(!empty($_FILES['app_favicon']['name'])){  
    $_POST['app_favicon'] = $_POST['app_pfavicon']; unset($_POST['app_pfavicon']);

    $config['file_name'] = $_FILES['app_favicon']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('app_favicon')){
      $uploadData = $this->upload->data();
      
      if (!empty($_POST['app_favicon'])) { 
        if(file_exists($config['upload_path'].$_POST['app_favicon'])){
        unlink($config['upload_path'].$_POST['app_favicon']); /* Deleting Image */
      } }

      $_POST['app_favicon'] = $uploadData['file_name'];

    }
  }

  if(!empty($_FILES['app_logo']['name'])){  
    $_POST['app_logo'] = $_POST['app_plogo']; unset($_POST['app_plogo']);

    $config['file_name'] = $_FILES['app_logo']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('app_logo')){
      $uploadData = $this->upload->data();
      
      if (!empty($_POST['app_logo'])) { 
        if(file_exists($config['upload_path'].$_POST['app_logo'])){
        unlink($config['upload_path'].$_POST['app_logo']); /* Deleting Image */
      } }
      
      $_POST['app_logo'] = $uploadData['file_name'];

    }
  }

  if(!empty($_FILES['app_footer_logo']['name'])){  
    $_POST['app_footer_logo'] = $_POST['app_footer_plogo']; 
    unset($_POST['app_footer_plogo']);

    $config['file_name'] = $_FILES['app_footer_logo']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('app_footer_logo')){
      $uploadData = $this->upload->data();
      
      if (!empty($_POST['app_footer_logo'])) { 
        if(file_exists($config['upload_path'].$_POST['app_footer_logo'])){
        unlink($config['upload_path'].$_POST['app_footer_logo']); /* Deleting Image */
      } }
      
      $_POST['app_footer_logo'] = $uploadData['file_name'];

    }
  }

  if(!empty($_FILES['app_mobile_logo']['name'])){  
    $_POST['app_mobile_logo'] = $_POST['app_mobile_plogo']; 
    unset($_POST['app_mobile_plogo']);

    $config['file_name'] = $_FILES['app_mobile_logo']['name'];
    //Load upload library and initialize configuration
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('app_mobile_logo')){
      $uploadData = $this->upload->data();
      
      if (!empty($_POST['app_mobile_logo'])) { 
        if(file_exists($config['upload_path'].$_POST['app_mobile_logo'])){
        unlink($config['upload_path'].$_POST['app_mobile_logo']); /* Deleting Image */
      } }
      
      $_POST['app_mobile_logo'] = $uploadData['file_name'];

    }
  }

  foreach ($_POST as $key => $value) {
    $this->db->set('m_app_value', $value);
    $this->db->where('m_app_key', $key);;
    $this->db->update('master_app_settings');
  }
  return true;
}
//==========================/Profile==========================//

//==========================Counter===========================//
public function get_counter_data(){
  $this->db->from('master_users_tbl');
  $res['users'] = $this->db->count_all_results();

  $this->db->from('master_category_tbl');
  $res['categories'] = $this->db->count_all_results();

  $this->db->from('master_listings_tbl');
  $res['all_listings'] = $this->db->count_all_results();

  $this->db->from('master_listings_tbl');
  $this->db->where('m_listing_status', 1);
  $res['active_listings'] = $this->db->count_all_results();

  $this->db->from('master_listings_tbl');
  $this->db->where('m_listing_status', 0);
  $res['pending_listings'] = $this->db->count_all_results();

  $this->db->from('master_advertisement_tbl');
  $this->db->where('m_ad_start_on <=', date("Y-m-d H:i:s"));
  $this->db->where('m_ad_end_on >=', date("Y-m-d H:i:s"));
  $this->db->where('m_ad_status', 1);
  $res['running_ads'] = $this->db->count_all_results();

  $this->db->from('master_advertisement_tbl');
  $res['all_ads'] = $this->db->count_all_results();

  return (object) $res;
}
//=========================/Counter===========================//

//===========================Graph============================//
public function get_monthly_listings($fdate='', $tdate=''){
  if (empty($fdate) || empty($tdate)){
    $fdate = date("Y-01"); $tdate = date("Y-12");
  }
  
  $result = array(); $mdate=$fdate;
  while ($mdate <= $tdate) {

    $mfdate = date("Y-m-01",strtotime($mdate));
    $mtdate = date("Y-m-t",strtotime($mdate));

    $result[] = (object) [
      'date' => $mdate, 
      'listings' => $this->get_date_listings($mfdate, $mtdate)
    ]; 

    $mdate = strtotime('+1 MONTH', strtotime($mdate));
    $mdate = date("Y-m", $mdate);
  }

  return array('fdate' => $fdate, 'tdate' => $tdate, 'monts_lsts' => $result );

}

public function get_date_listings($f_date='', $t_date=''){ $res = 0;
  if (!empty($f_date) && !empty($t_date)) {
    $this->db->where('DATE(m_listing_added_on) >=',$f_date);
    $this->db->where('DATE(m_listing_added_on) <=',$t_date);
    $this->db->from('master_listings_tbl');
    $res = $this->db->count_all_results();
  }

  return $res;
}
//==========================/Graph============================//

//===========================/User============================//
} ?>