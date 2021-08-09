<?php date_default_timezone_set('Asia/Kolkata');
class Main_model extends CI_model {
  public function get_all_users(){
    if(!empty($this->input->get('id'))){
      $this->db->where('mu_type',$this->input->get('id'));
    }
    $res = $this->db->get('master_users_tbl')->result();
    return $res;
  }
  public function get_a_user($id){
    $this->db->select('*');
    $this->db->where('muser_id', $id);
    return $this->db->get('master_users_tbl')->result();
  }
  public function insert_user(){
    if(!empty($_FILES['mu_image']['name'])){
      $config['file_name'] = $_FILES['mu_image']['name'];
      $config['upload_path'] = 'uploads/user';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['mu_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('mu_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['mu_image'])) { 
          if(file_exists($config['mu_image'].$update_data['mu_image'])){
          unlink($config['upload_path'].$update_data['mu_image']); /* deleting Image */
          } 
        }
        $mu_image = $uploadData['file_name'];
      }
    }
    else{
      $mu_image ='';
    }
    $data = array(
      "mu_name" => $this->input->post('mu_name'),
      "mu_email" => $this->input->post('mu_email'),
      "mu_contact" => $this->input->post('mu_contact'),
      //"mu_loginid" => $this->input->post('mu_loginid'),
      //"mu_password" => $this->input->post('mu_password'),
      "mu_desgination" => $this->input->post('mu_desgination'),
      "mu_department" => $this->input->post('mu_department'),
      "mu_type" => $this->input->post('mu_type'),
      "mu_joined_on" => $this->input->post('mu_joined_on'),
      "mu_address" => $this->input->post('mu_address'),
      "mu_order" => $this->input->post('mu_order'),
      "mu_status" => $this->input->post('mu_status'),
      "mu_image" => "$mu_image",
      "mu_added_on" =>date('Y-m-d H:i'),
    );
    $this->db->insert('master_users_tbl', $data);
    return true;
  }
  public function update_user(){
    if(!empty($_FILES['mu_image']['name'])){
      $config['file_name'] = $_FILES['mu_image']['name'];
      $config['upload_path'] = 'uploads/user';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['mu_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('mu_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['mu_image'])) { 
          if(file_exists($config['mu_image'].$update_data['mu_image'])){
          unlink($config['upload_path'].$update_data['mu_image']); /* deleting Image */
          } 
        }
        $mu_image = $uploadData['file_name'];
      }
    }
    else{
      $mu_image =$this->input->post('mu_images');
    }
    $data = array(
      "mu_name" => $this->input->post('mu_name'),
      "mu_email" => $this->input->post('mu_email'),
      "mu_contact" => $this->input->post('mu_contact'),
      //"mu_loginid" => $this->input->post('mu_loginid'),
      //"mu_password" => $this->input->post('mu_password'),
      "mu_desgination" => $this->input->post('mu_desgination'),
      "mu_department" => $this->input->post('mu_department'),
      "mu_type" => $this->input->post('mu_type'),
      "mu_joined_on" => $this->input->post('mu_joined_on'),
      "mu_address" => $this->input->post('mu_address'),
      "mu_order" => $this->input->post('mu_order'),
      "mu_status" => $this->input->post('mu_status'),
      "mu_image" => "$mu_image",
      "mu_modified_on" =>date('Y-m-d H:i'),
    );
    $this->db->where('muser_id',$this->input->post('muser_id'));
    $this->db->update('master_users_tbl', $data);
    return true;
  }
  public function delete_user(){
      $this->db->where('muser_id', $this->input->post('delete_id'));
      $this->db->delete('master_users_tbl');
      return array( 'status'=>'success',
        'message'=>'User has been Deleted Successfully!'
      );
  }
  public function get_all_events(){
    $res = $this->db->get('master_event_tbl')->result();
    return $res;
  }
  public function get_a_event($id){
    $this->db->select('*');
    $this->db->where('m_event_id', $id);
    return $this->db->get('master_event_tbl')->result();
  }
  public function insert_events(){
    if(!empty($_FILES['m_event_image']['name'])){
      $config['file_name'] = $_FILES['m_event_image']['name'];
      $config['upload_path'] = 'uploads/events';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_event_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_event_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_event_image'])) { 
          if(file_exists($config['m_event_image'].$update_data['m_event_image'])){
          unlink($config['upload_path'].$update_data['m_event_image']); /* deleting Image */
          } 
        }
        $m_event_image = $uploadData['file_name'];
      }
    }
    else{
      $m_event_image ='';
    }
    $data = array(
      "m_event_title" => $this->input->post('m_event_title'),
      "m_event_date" => $this->input->post('m_event_date'),
      "m_event_location" => $this->input->post('m_event_location'),
      "m_event_status" => $this->input->post('m_event_status'),
      "m_event_desc" => $this->input->post('m_event_desc'),
      "m_event_image" => "$m_event_image",
    );
    $this->db->insert('master_event_tbl', $data);
    return true;
  }
  public function update_events(){
    if(!empty($_FILES['m_event_image']['name'])){
      $config['file_name'] = $_FILES['m_event_image']['name'];
      $config['upload_path'] = 'uploads/events';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_event_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_event_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_event_image'])) { 
          if(file_exists($config['m_event_image'].$update_data['m_event_image'])){
          unlink($config['upload_path'].$update_data['m_event_image']); /* deleting Image */
          } 
        }
        $m_event_image = $uploadData['file_name'];
      }
    }
    else{
      $m_event_image =$this->input->post('m_event_images');
    }
    $data = array(
      "m_event_title" => $this->input->post('m_event_title'),
      "m_event_date" => $this->input->post('m_event_date'),
      "m_event_location" => $this->input->post('m_event_location'),
      "m_event_status" => $this->input->post('m_event_status'),
      "m_event_desc" => $this->input->post('m_event_desc'),
      "m_event_image" => "$m_event_image",
    );
    $this->db->where('m_event_id',$this->input->post('m_event_id'));
    $this->db->update('master_event_tbl', $data);
    return true;
  }
  public function delete_events(){
      $this->db->where('m_event_id', $this->input->post('delete_id'));
      $this->db->delete('master_event_tbl');
      return array( 'status'=>'success',
        'message'=>'Event has been Deleted Successfully!'
      );
  }
  public function insert_activities(){
    if(!empty($_FILES['m_activities_image']['name'])){
      $config['file_name'] = $_FILES['m_activities_image']['name'];
      $config['upload_path'] = 'uploads/activities';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_activities_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_activities_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_activities_image'])) { 
          if(file_exists($config['m_activities_image'].$update_data['m_activities_image'])){
          unlink($config['upload_path'].$update_data['m_activities_image']); /* deleting Image */
          } 
        }
        $m_activities_image = $uploadData['file_name'];
      }
    }
    else{
      $m_activities_image ='';
    }
    $data = array(
      "m_activities_type" => $this->input->post('m_activities_type'),
      "m_activities_desc" => $this->input->post('m_activities_desc'),
      "m_activities_date" => $this->input->post('m_activities_date'),
      "m_activities_status" => $this->input->post('m_activities_status'),
      "m_activities_image" => "$m_activities_image",
    );
    $this->db->insert('master_activities_tbl', $data);
    return true;
  }
  public function get_all_activities(){
    $res = $this->db->get('master_activities_tbl')->result();
    return $res;
  }
  public function get_a_activities($id){
    $this->db->select('*');
    $this->db->where('m_activities_id', $id);
    $res = $this->db->get('master_activities_tbl')->result();
    return $res;
  }
  public function update_activities(){
    if(!empty($_FILES['m_activities_image']['name'])){
      $config['file_name'] = $_FILES['m_activities_image']['name'];
      $config['upload_path'] = 'uploads/activities';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_activities_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_activities_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_activities_image'])) { 
          if(file_exists($config['m_activities_image'].$update_data['m_activities_image'])){
          unlink($config['upload_path'].$update_data['m_activities_image']); /* deleting Image */
          } 
        }
        $m_activities_image = $uploadData['file_name'];
      }
    }
    else{
      $m_activities_image =$this->input->post('m_activities_images');
    }
    $data = array(
      "m_activities_type" => $this->input->post('m_activities_type'),
      "m_activities_desc" => $this->input->post('m_activities_desc'),
      "m_activities_date" => $this->input->post('m_activities_date'),
      "m_activities_status" => $this->input->post('m_activities_status'),
      "m_activities_image" => "$m_activities_image",
    );
    $this->db->where('m_activities_id',$this->input->post('m_activities_id'));
    $this->db->update('master_activities_tbl', $data);
    return true;
  }
  public function delete_activities(){
      $this->db->where('m_activities_id', $this->input->post('delete_id'));
      $this->db->delete('master_activities_tbl');
      return array( 'status'=>'success',
        'message'=>'Activities has been Deleted Successfully!'
      );
  }
  
  public function insert_documents(){
    if(!empty($_FILES['m_document_pdf']['name'])){
      $config['file_name'] = $_FILES['m_document_pdf']['name'];
      $config['upload_path'] = 'uploads/documents';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_document_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_document_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_document_pdf'])) { 
          if(file_exists($config['m_document_pdf'].$update_data['m_document_pdf'])){
          unlink($config['upload_path'].$update_data['m_document_pdf']); /* deleting Image */
          } 
        }
        $m_document_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_document_pdf ='';
    }
    $data = array(
      "m_document_type" => $this->input->post('m_document_type'),
      "m_document_title" => $this->input->post('m_document_title'),
      "m_document_status" => $this->input->post('m_document_status'),
      "m_document_added" => date('Y-m-d'),
      "m_document_pdf" => "$m_document_pdf",
    );
    $this->db->insert('master_document_tbl', $data);
    return true;
  }
  public function update_documents(){
    if(!empty($_FILES['m_document_pdf']['name'])){
      $config['file_name'] = $_FILES['m_document_pdf']['name'];
      $config['upload_path'] = 'uploads/documents';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_document_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_document_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_document_pdf'])) { 
          if(file_exists($config['m_document_pdf'].$update_data['m_document_pdf'])){
          unlink($config['upload_path'].$update_data['m_document_pdf']); /* deleting Image */
          } 
        }
        $m_document_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_document_pdf =$this->input->post('m_document_pdfs');
    }
    $data = array( 
      "m_document_type" => $this->input->post('m_document_type'),
      "m_document_title" => $this->input->post('m_document_title'),
      "m_document_status" => $this->input->post('m_document_status'),
      "m_document_added" => date('Y-m-d'),
      "m_document_pdf" => "$m_document_pdf",
    );
    $this->db->where('m_document_id',$this->input->post('m_document_id'));
    $this->db->update('master_document_tbl', $data);
    return true;
  }
  public function delete_document(){
      $this->db->where('m_document_id', $this->input->post('delete_id'));
      $this->db->delete('master_document_tbl');
      return array( 'status'=>'success',
        'message'=>'Document has been Deleted Successfully!'
      );
  }
  public function get_all_documents(){
    $res = $this->db->get('master_document_tbl')->result();
    return $res;
  }
  public function get_a_document($id){
    $this->db->select('*');
    $this->db->where('m_document_id', $id);
    return $this->db->get('master_document_tbl')->result();
  }
  public function get_all_videos(){
    $res = $this->db->get('master_video_tbl')->result();
    return $res;
  }
  public function get_a_video($id){
    $this->db->select('*');
    $this->db->where('m_video_id', $id);
    return $this->db->get('master_video_tbl')->result();
  }
  public function insert_video(){
    if(!empty($_FILES['m_video_image']['name'])){
      $config['file_name'] = $_FILES['m_video_image']['name'];
      $config['upload_path'] = 'uploads/video';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_video_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_video_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_video_image'])) { 
          if(file_exists($config['m_video_image'].$update_data['m_video_image'])){
          unlink($config['upload_path'].$update_data['m_video_image']); /* deleting Image */
          } 
        }
        $m_video_image = $uploadData['file_name'];
      }
    }
    else{
      $m_video_image ='';
    }
    $data = array(
      "m_video_title" => $this->input->post('m_video_title'),
      "m_video_url" => $this->input->post('m_video_url'),
      "m_video_status" => $this->input->post('m_video_status'),
      "m_video_image" => "$m_video_image",
      "m_video_added" => date('Y-m-d'),
    );
    $this->db->insert('master_video_tbl', $data);
    return true;
  }
  public function update_video(){
    if(!empty($_FILES['m_video_image']['name'])){
      $config['file_name'] = $_FILES['m_video_image']['name'];
      $config['upload_path'] = 'uploads/video';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_video_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_video_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_video_image'])) { 
          if(file_exists($config['m_video_image'].$update_data['m_video_image'])){
          unlink($config['upload_path'].$update_data['m_video_image']); /* deleting Image */
          } 
        }
        $m_video_image = $uploadData['file_name'];
      }
    }
    else{
      $m_video_image =$this->input->post('m_video_images');
    }
    $data = array(
      "m_video_title" => $this->input->post('m_video_title'),
      "m_video_url" => $this->input->post('m_video_url'),
      "m_video_status" => $this->input->post('m_video_status'),
      "m_video_image" => "$m_video_image",
      "m_video_added" => date('Y-m-d'),
    );
    $this->db->where('m_video_id',$this->input->post('m_video_id'));
    $this->db->update('master_video_tbl', $data);
    return true;
  }
  public function delete_video(){
      $this->db->where('m_video_id', $this->input->post('delete_id'));
      $this->db->delete('master_video_tbl');
      return array( 'status'=>'success',
        'message'=>'Video has been Deleted Successfully!'
      );
  }
  //=========================Magazines=========================//

  public function get_all_magazines(){ 
    $this->db->order_by('magazines_id', 'DESC');
    return $this->db->get('master_magazines_tbl')->result(); 
  }

  public function get_a_magazines($id){
    $this->db->select('*');
    $this->db->where('magazines_id', $id);
    return $this->db->get('master_magazines_tbl')->result();
  }
  public function insert_magazines(){

    if(!empty($_FILES['magazines_image']['name'])){
        $config['file_name'] = $_FILES['magazines_image']['name'];
        $config['upload_path'] = 'uploads/magazines';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['magazines_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('magazines_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['magazines_image'])) { 
            if(file_exists($config['magazines_image'].$update_data['magazines_image'])){
            unlink($config['upload_path'].$update_data['magazines_image']); // deleting Image //
            } 
          }
          $magazines_image = $uploadData['file_name'];
        }
      }
      else{
        $magazines_image ='';
      }

    $insert_data = array(
      "magazines_title"    => $this->input->post('magazines_title'),
      "magazines_desc"    => $this->input->post('magazines_desc'),
      "magazines_shortdesc"    => $this->input->post('magazines_shortdesc'),
      "magazines_image"    => $magazines_image,
      "magazines_author"    => $this->input->post('magazines_author'),
      "magazines_author_contact"    => $this->input->post('magazines_author_contact'),
      "magazines_postdate"    => $this->input->post('magazines_postdate'),
      "magazines_location"    => $this->input->post('magazines_location'),
      "magazines_status"    => $this->input->post('magazines_status'),
    );

    return $this->db->insert('master_magazines_tbl',$insert_data);
  }

  public function update_magazines(){


     if(!empty($_FILES['magazines_image']['name'])){
        $config['file_name'] = $_FILES['magazines_image']['name'];
        $config['upload_path'] = 'uploads/magazines';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['magazines_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('magazines_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['magazines_image'])) { 
            if(file_exists($config['magazines_image'].$update_data['magazines_image'])){
            unlink($config['upload_path'].$update_data['magazines_image']); // deleting Image //
            } 
          }
          $magazines_image = $uploadData['file_name'];
        }
      }
      else{
        $magazines_image = $this->input->post('magazines_pic');
      }

    $update_data = array(
      "magazines_title"    => $this->input->post('magazines_title'),
      "magazines_desc"    => $this->input->post('magazines_desc'),
      "magazines_shortdesc"    => $this->input->post('magazines_shortdesc'),
      "magazines_image"    => $magazines_image,
      "magazines_author"    => $this->input->post('magazines_author'),
      "magazines_author_contact"    => $this->input->post('magazines_author_contact'),
      "magazines_postdate"    => $this->input->post('magazines_postdate'),
      "magazines_location"    => $this->input->post('magazines_location'),
      "magazines_status"    => $this->input->post('magazines_status'),
    );

    $this->db->where('magazines_id',$this->input->post('magazines_id'));
    return $this->db->update('master_magazines_tbl',$update_data);

  }

  public function delete_magazines(){
   
      $this->db->where('magazines_id', $this->input->post('delete_id'));
      $this->db->delete('master_magazines_tbl');
      return array( 'status'=>'success',
        'message'=>'Magazines Deleted Successfully!'
      );
    
  }
  public function change_status(){
    $this->db->set('magazines_status', $this->input->post('cgstatus'));
    $this->db->where('magazines_id', $this->input->post('cgid'));
    return $this->db->update('master_magazines_tbl');
  }
  //=========================Magazines=========================//
  public function insert_academic(){
    if(!empty($_FILES['academic_file']['name'])){
      $config['file_name'] = $_FILES['academic_file']['name'];
      $config['upload_path'] = 'uploads/reports';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['academic_file']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('academic_file')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['academic_file'])) { 
          if(file_exists($config['academic_file'].$update_data['academic_file'])){
          unlink($config['upload_path'].$update_data['academic_file']); /* deleting Image */
          } 
        }
        $academic_file = $uploadData['file_name'];
      }
    }
    else{
      $academic_file ='';
    }
    $data = array(
      "academic_title" => $this->input->post('academic_title'),
      "academic_type" => $this->input->post('academic_type'),
      "academic_status" => $this->input->post('academic_status'),
      "academic_desc" => $this->input->post('academic_desc'),
      "academic_file" => "$academic_file",
      "academic_added_on" => date('Y-m-d'),
    );
    $this->db->insert('master_academic_tbl', $data);
    return true;
  }
  public function get_all_academic(){
    $this->db->select('*');
    if(!empty($this->input->get('id'))){
      $this->db->where('academic_type',$this->input->get('id'));
    }
    $res = $this->db->get('master_academic_tbl')->result();
    return $res;
  }
  public function get_a_academic($id){
    $this->db->select('*');
    $this->db->where('academic_id', $id);
    $res = $this->db->get('master_academic_tbl')->result();
    return $res;
  }
  public function update_academic(){
    if(!empty($_FILES['academic_file']['name'])){
      $config['file_name'] = $_FILES['academic_file']['name'];
      $config['upload_path'] = 'uploads/reports';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['academic_file']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('academic_file')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['academic_file'])) { 
          if(file_exists($config['academic_file'].$update_data['academic_file'])){
          unlink($config['upload_path'].$update_data['academic_file']); /* deleting Image */
          } 
        }
        $academic_file = $uploadData['file_name'];
      }
    }
    else{
      $academic_file =$this->input->post('academic_files');
    }
    $data = array(
      "academic_title" => $this->input->post('academic_title'),
      "academic_type" => $this->input->post('academic_type'),
      "academic_status" => $this->input->post('academic_status'),
      "academic_desc" => $this->input->post('academic_desc'),
      "academic_file" => "$academic_file",
    );
    $this->db->where('academic_id',$this->input->post('academic_id'));
    $this->db->update('master_academic_tbl', $data);
    return true;
  }
  public function delete_academic(){
      $this->db->where('academic_id', $this->input->post('delete_id'));
      $this->db->delete('master_academic_tbl');
      return array( 'status'=>'success',
        'message'=>'Academic has been Deleted Successfully!'
      );
  }
  public function get_all_banner(){
    $this->db->select('*');
    $res = $this->db->get('master_banner_tbl')->result();
    return $res;
  }
  public function get_a_banner($id){
    $this->db->select('*');
    $this->db->where('m_banner_id', $id);
    $res = $this->db->get('master_banner_tbl')->result();
    return $res;
  }
  public function insert_banner(){
    if(!empty($_FILES['m_banner_image']['name'])){
        $config['file_name'] = $_FILES['m_banner_image']['name'];
        $config['upload_path'] = 'uploads/slider';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['m_banner_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('m_banner_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['m_banner_image'])) { 
            if(file_exists($config['m_banner_image'].$update_data['m_banner_image'])){
            unlink($config['upload_path'].$update_data['m_banner_image']); // deleting Image //
            } 
          }
          $m_banner_image = $uploadData['file_name'];
        }
      }
      else{
        $m_banner_image ='';
      }

    $insert_data = array(
      "m_banner_title"    => $this->input->post('m_banner_title'),
      "m_banner_order"    => $this->input->post('m_banner_order'),
      "m_banner_status"    => $this->input->post('m_banner_status'),
      "m_banner_image"    => $m_banner_image,
    );

    return $this->db->insert('master_banner_tbl',$insert_data);
  }
 public function update_banner(){
    if(!empty($_FILES['m_banner_image']['name'])){
        $config['file_name'] = $_FILES['m_banner_image']['name'];
        $config['upload_path'] = 'uploads/slider';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['m_banner_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('m_banner_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['m_banner_image'])) { 
            if(file_exists($config['m_banner_image'].$update_data['m_banner_image'])){
            unlink($config['upload_path'].$update_data['m_banner_image']); // deleting Image //
            } 
          }
          $m_banner_image = $uploadData['file_name'];
        }
      }
      else{
        $m_banner_image =$this->input->post('m_banner_images');
      }

    $insert_data = array(
      "m_banner_title"    => $this->input->post('m_banner_title'),
      "m_banner_order"    => $this->input->post('m_banner_order'),
      "m_banner_status"    => $this->input->post('m_banner_status'),
      "m_banner_image"    => $m_banner_image,
    );
    $this->db->where('m_banner_id',$this->input->post('m_banner_id'));
    return $this->db->update('master_banner_tbl',$insert_data);
  }
  public function delete_banner(){
      $this->db->where('m_banner_id', $this->input->post('delete_id'));
      $this->db->delete('master_banner_tbl');
      return array( 'status'=>'success',
        'message'=>'Banner has been Deleted Successfully!'
      );
  }
  public function get_all_news(){
    $this->db->select('*');
    $res = $this->db->get('master_news_tbl')->result();
    return $res;
  }
  public function get_a_news($id){
    $this->db->select('*');
    $this->db->where('m_news_id', $id);
    $res = $this->db->get('master_news_tbl')->result();
    return $res;
  }
  public function insert_news(){
    if(!empty($_FILES['m_news_image']['name'])){
        $config['file_name'] = $_FILES['m_news_image']['name'];
        $config['upload_path'] = 'uploads/news';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['m_news_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('m_news_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['m_news_image'])) { 
            if(file_exists($config['m_news_image'].$update_data['m_news_image'])){
            unlink($config['upload_path'].$update_data['m_news_image']); // deleting Image //
            } 
          }
          $m_news_image = $uploadData['file_name'];
        }
      }
      else{
        $m_news_image ='';
      }

    $insert_data = array(
      "m_news_type"    => $this->input->post('m_news_type'),
      "m_news_title"    => $this->input->post('m_news_title'),
      "m_news_posted"    => $this->input->post('m_news_posted'),
      "m_news_status"    => $this->input->post('m_news_status'),
      "m_news_desc"    => $this->input->post('m_news_desc'),
      "m_news_image"    => "$m_news_image",
    );

    return $this->db->insert('master_news_tbl',$insert_data);
  }
  public function update_news(){
    if(!empty($_FILES['m_news_image']['name'])){
        $config['file_name'] = $_FILES['m_news_image']['name'];
        $config['upload_path'] = 'uploads/news';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['m_news_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('m_news_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['m_news_image'])) { 
            if(file_exists($config['m_news_image'].$update_data['m_news_image'])){
            unlink($config['upload_path'].$update_data['m_news_image']); // deleting Image //
            } 
          }
          $m_news_image = $uploadData['file_name'];
        }
      }
      else{
        $m_news_image =$this->input->post('m_news_images');
      }

    $insert_data = array(
      "m_news_type"    => $this->input->post('m_news_type'),
      "m_news_title"    => $this->input->post('m_news_title'),
      "m_news_posted"    => $this->input->post('m_news_posted'),
      "m_news_status"    => $this->input->post('m_news_status'),
      "m_news_desc"    => $this->input->post('m_news_desc'),
      "m_news_image"    => $m_news_image,
    );
    $this->db->where('m_news_id',$this->input->post('m_news_id'));
    return $this->db->update('master_news_tbl',$insert_data);
  }
  public function delete_news(){
      $this->db->where('m_news_id', $this->input->post('delete_id'));
      $this->db->delete('master_news_tbl');
      return array( 'status'=>'success',
        'message'=>'News has been Deleted Successfully!'
      );
  }
  public function get_all_star_performer(){
    $this->db->select('*');
    $res = $this->db->get('star_performer_tbl')->result();
    return $res;
  }
  public function get_a_star_performer($id){
    $this->db->select('*');
    $this->db->where('performer_id', $id);
    $res = $this->db->get('star_performer_tbl')->result();
    return $res;
  }
  public function insert_star_performer(){
    if(!empty($_FILES['performer_image']['name'])){
        $config['file_name'] = $_FILES['performer_image']['name'];
        $config['upload_path'] = 'uploads/performer';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['performer_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('performer_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['performer_image'])) { 
            if(file_exists($config['performer_image'].$update_data['performer_image'])){
            unlink($config['upload_path'].$update_data['performer_image']); // deleting Image //
            } 
          }
          $performer_image = $uploadData['file_name'];
        }
      }
      else{
        $performer_image ='';
      }

    $insert_data = array(
      "performer_name"    => $this->input->post('performer_name'),
      "performer_contact"    => $this->input->post('performer_contact'),
      "performer_desc"    => $this->input->post('performer_desc'),
      "performer_status"    => $this->input->post('performer_status'),
      "performer_image"    => "$performer_image",
      "performer_added"    => date('Y-m-d'),
    );

    return $this->db->insert('star_performer_tbl',$insert_data);
  }
  public function update_star_performer(){
    if(!empty($_FILES['performer_image']['name'])){
        $config['file_name'] = $_FILES['performer_image']['name'];
        $config['upload_path'] = 'uploads/performer';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $_FILES['performer_image']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('performer_image')){
          $uploadData = $this->upload->data();  
          if (!empty($update_data['performer_image'])) { 
            if(file_exists($config['performer_image'].$update_data['performer_image'])){
            unlink($config['upload_path'].$update_data['performer_image']); // deleting Image //
            } 
          }
          $performer_image = $uploadData['file_name'];
        }
      }
      else{
        $performer_image =$this->input->post('performer_images');
      }

    $insert_data = array(
      "performer_name"    => $this->input->post('performer_name'),
      "performer_contact"    => $this->input->post('performer_contact'),
      "performer_desc"    => $this->input->post('performer_desc'),
      "performer_status"    => $this->input->post('performer_status'),
      "performer_image"    => "$performer_image",
    );
    $this->db->where('performer_id',$this->input->post('performer_id'));
    return $this->db->update('star_performer_tbl',$insert_data);
  }
  public function delete_star_performer(){
      $this->db->where('performer_id', $this->input->post('delete_id'));
      $this->db->delete('star_performer_tbl');
      return array( 'status'=>'success',
        'message'=>'Star Performer has been Deleted Successfully!'
      );
  }
  public function get_all_school_calendar(){
    $this->db->select('*');
    $res = $this->db->get('master_calendar_tbl')->result();
    return $res;
  }
  public function get_a_school_calendar($id){
    $this->db->select('*');
    $this->db->where('m_cal_id', $id);
    $res = $this->db->get('master_calendar_tbl')->result();
    return $res;
  }
  public function insert_school_calendar(){
    if(!empty($_FILES['m_cal_pdf']['name'])){
      $config['file_name'] = $_FILES['m_cal_pdf']['name'];
      $config['upload_path'] = 'uploads/calendar';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_cal_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_cal_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_cal_pdf'])) { 
          if(file_exists($config['m_cal_pdf'].$update_data['m_cal_pdf'])){
          unlink($config['upload_path'].$update_data['m_cal_pdf']); /* deleting Image */
          } 
        }
        $m_cal_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_cal_pdf ='';
    }
    $data = array(
      "m_cal_title" => $this->input->post('m_cal_title'),
      "m_cal_date" => $this->input->post('m_cal_date'),
      "m_cal_is_current" => $this->input->post('m_cal_is_current'),
      "m_cal_desc" => $this->input->post('m_cal_desc'),
      "m_cal_status" => $this->input->post('m_cal_status'),
      "m_cal_pdf" => "$m_cal_pdf",
    );
    $this->db->insert('master_calendar_tbl', $data);
    return true;
  }
  public function update_school_calendar(){
    if(!empty($_FILES['m_cal_pdf']['name'])){
      $config['file_name'] = $_FILES['m_cal_pdf']['name'];
      $config['upload_path'] = 'uploads/calendar';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_cal_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_cal_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_cal_pdf'])) { 
          if(file_exists($config['m_cal_pdf'].$update_data['m_cal_pdf'])){
          unlink($config['upload_path'].$update_data['m_cal_pdf']); /* deleting Image */
          } 
        }
        $m_cal_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_cal_pdf =$this->input->post('m_cal_pdfs');
    }
    $data = array(
      "m_cal_title" => $this->input->post('m_cal_title'),
      "m_cal_date" => $this->input->post('m_cal_date'),
      "m_cal_is_current" => $this->input->post('m_cal_is_current'),
      "m_cal_desc" => $this->input->post('m_cal_desc'),
      "m_cal_status" => $this->input->post('m_cal_status'),
      "m_cal_pdf" => "$m_cal_pdf",
    );
    $this->db->where('m_cal_id',$this->input->post('m_cal_id'));
    $this->db->update('master_calendar_tbl', $data);
    return true;
  }
  public function delete_school_calendar(){
      $this->db->where('m_cal_id', $this->input->post('delete_id'));
      $this->db->delete('master_calendar_tbl');
      return array( 'status'=>'success',
        'message'=>'School Calendar has been Deleted Successfully!'
      );
  }
  public function get_all_enquiries(){
    $this->db->select('*');
    $this->db->order_by('contact_id','desc');
    $res = $this->db->get('contact_tbl')->result();
    return $res;
  }

  
  //=================Fees Structure ========================//

    public function get_all_school_fees(){
    $this->db->select('*');
    $res = $this->db->get('master_fees_tbl')->result();
    return $res;
  }
  public function get_a_school_fees($id){
    $this->db->select('*');
    $this->db->where('m_fees_id', $id);
    $res = $this->db->get('master_fees_tbl')->result();
    return $res;
  }
  public function insert_school_fees(){
    if(!empty($_FILES['m_fees_pdf']['name'])){
      $config['file_name'] = $_FILES['m_fees_pdf']['name'];
      $config['upload_path'] = 'uploads/fees';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_fees_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_fees_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_fees_pdf'])) { 
          if(file_exists($config['m_fees_pdf'].$update_data['m_fees_pdf'])){
          unlink($config['upload_path'].$update_data['m_fees_pdf']); /* deleting Image */
          } 
        }
        $m_fees_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_fees_pdf ='';
    }
    $data = array(
      "m_fees_title" => $this->input->post('m_fees_title'),
      "m_fees_desc" => $this->input->post('m_fees_desc'),
      "m_fees_iscurrent" => $this->input->post('m_fees_iscurrent'),
      "m_fees_desc" => $this->input->post('m_fees_desc'),
      "m_fees_status" => $this->input->post('m_fees_status'),
      "m_fees_date" => $this->input->post('m_fees_date'),
      "m_fees_pdf" => "$m_fees_pdf",
    );
    $this->db->insert('master_fees_tbl', $data);
    return true;
  }
  public function update_school_fees(){
    if(!empty($_FILES['m_fees_pdf']['name'])){
      $config['file_name'] = $_FILES['m_fees_pdf']['name'];
      $config['upload_path'] = 'uploads/fees';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_fees_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_fees_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_fees_pdf'])) { 
          if(file_exists($config['m_fees_pdf'].$update_data['m_fees_pdf'])){
          unlink($config['upload_path'].$update_data['m_fees_pdf']); /* deleting Image */
          } 
        }
        $m_fees_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_fees_pdf =$this->input->post('m_fees_pdf');
    }
    $data = array(
      "m_fees_title" => $this->input->post('m_fees_title'),
      "m_fees_desc" => $this->input->post('m_fees_desc'),
      "m_fees_iscurrent" => $this->input->post('m_fees_iscurrent'),
      "m_fees_desc" => $this->input->post('m_fees_desc'),
      "m_fees_status" => $this->input->post('m_fees_status'),
      "m_fees_date" => $this->input->post('m_fees_date'),
      "m_fees_pdf" => "$m_fees_pdf",
    );
    $this->db->where('m_fees_id',$this->input->post('m_fees_id'));
    $this->db->update('master_fees_tbl', $data);
    return true;
  }
  public function delete_school_fees(){
      $this->db->where('m_fees_id', $this->input->post('delete_id'));
      $this->db->delete('master_fees_tbl');
      return array( 'status'=>'success',
        'message'=>'School Fees has been Deleted Successfully!'
      );
  }
  //==============================School Fees End//======================================//



  //=================School Committee ========================//

    public function get_all_school_committee(){
    $this->db->select('*');
    $res = $this->db->get('master_committee_tbl')->result();
    return $res;
  }
  public function get_a_school_committee($id){
    $this->db->select('*');
    $this->db->where('m_committee_id', $id);
    $res = $this->db->get('master_committee_tbl')->result();
    return $res;
  }
  public function insert_school_committee(){
    if(!empty($_FILES['m_committee_pdf']['name'])){
      $config['file_name'] = $_FILES['m_committee_pdf']['name'];
      $config['upload_path'] = 'uploads/committee';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_committee_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_committee_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_committee_pdf'])) { 
          if(file_exists($config['m_committee_pdf'].$update_data['m_committee_pdf'])){
          unlink($config['upload_path'].$update_data['m_committee_pdf']); /* deleting Image */
          } 
        }
        $m_committee_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_fees_pdf ='';
    }
    $data = array(
      "m_committee_title" => $this->input->post('m_committee_title'),
      "m_committee_desc" => $this->input->post('m_committee_desc'),
      "m_committee_iscurrent" => $this->input->post('m_committee_iscurrent'),
      "m_committee_status" => $this->input->post('m_committee_status'),
      "m_committee_addeddate" => $this->input->post('m_committee_addeddate'),
      "m_committee_pdf" => "$m_committee_pdf",
    );
    $this->db->insert('master_committee_tbl', $data);
    return true;
  }
  public function update_school_committee(){
    if(!empty($_FILES['m_committee_pdf']['name'])){
      $config['file_name'] = $_FILES['m_committee_pdf']['name'];
      $config['upload_path'] = 'uploads/committee';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['m_committee_pdf']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('m_committee_pdf')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['m_committee_pdf'])) { 
          if(file_exists($config['m_committee_pdf'].$update_data['m_committee_pdf'])){
          unlink($config['upload_path'].$update_data['m_committee_pdf']); /* deleting Image */
          } 
        }
        $m_committee_pdf = $uploadData['file_name'];
      }
    }
    else{
      $m_committee_pdf =$this->input->post('m_committee_pdf');
    }
    $data = array(
      "m_committee_title" => $this->input->post('m_committee_title'),
      "m_committee_desc" => $this->input->post('m_committee_desc'),
      "m_committee_iscurrent" => $this->input->post('m_committee_iscurrent'),
      "m_committee_status" => $this->input->post('m_committee_status'),
      "m_committee_addeddate" => $this->input->post('m_committee_addeddate'),
      "m_committee_pdf" => "$m_committee_pdf",
    );
    $this->db->where('m_committee_id',$this->input->post('m_committee_id'));
    $this->db->update('master_committee_tbl', $data);
    return true;
  }
  public function delete_school_committee(){
      $this->db->where('m_committee_id', $this->input->post('delete_id'));
      $this->db->delete('master_committee_tbl');
      return array( 'status'=>'success',
        'message'=>'School Committee has been Deleted Successfully!'
      );
  }
  //==============================School Committee End//======================================//



   //=================School Lab Start============ ========================//

    public function get_all_school_lab(){
    $this->db->select('*');
    $res = $this->db->join('laboratories_type','laboratories_type.l_type_id = master_laboratories_tbl.lab_type','left');
    $res = $this->db->join('master_lab_group','master_lab_group.group_id  = master_laboratories_tbl.lab_group','left');
    $res = $this->db->get('master_laboratories_tbl')->result();
    return $res;
  }

   public function get_all_school_lab_type(){
    $this->db->select('*');
    $res = $this->db->get('laboratories_type')->result();
    return $res;
  }

   public function get_all_school_lab_group(){
    $this->db->select('*');
    $res = $this->db->get('master_lab_group')->result();
    return $res;
  }
  public function get_a_school_lab($id){
    $this->db->select('*');
    $this->db->where('lab_id ', $id);
    $res = $this->db->get('master_laboratories_tbl')->result();
    return $res;
  }
  public function insert_school_lab(){
    if(!empty($_FILES['lab_image']['name'])){
      $config['file_name'] = $_FILES['lab_image']['name'];
      $config['upload_path'] = 'uploads/lab';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['lab_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('lab_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['lab_image'])) { 
          if(file_exists($config['lab_image'].$update_data['lab_image'])){
          unlink($config['upload_path'].$update_data['lab_image']); /* deleting Image */
          } 
        }
        $lab_image = $uploadData['file_name'];
      }
    }
    else{
      $lab_image ='';
    }
    $data = array(
      "lab_type" => !empty($this->input->post('lab_type'))?$this->input->post('lab_type'):'',
      "lab_group" => $this->input->post('lab_group'),
      "lab_title" => $this->input->post('lab_title'),
      "lab_desc" => $this->input->post('lab_desc'),
      "lab_status" => $this->input->post('lab_status'),
      "lab_image" => "$lab_image",
    );
    $this->db->insert('master_laboratories_tbl', $data);
    return true;
  }
  public function update_school_lab(){
    if(!empty($_FILES['lab_image']['name'])){
      $config['file_name'] = $_FILES['lab_image']['name'];
      $config['upload_path'] = 'uploads/lab';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['lab_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('lab_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['lab_image'])) { 
          if(file_exists($config['lab_image'].$update_data['lab_image'])){
          unlink($config['upload_path'].$update_data['lab_image']); /* deleting Image */
          } 
        }
        $lab_image = $uploadData['file_name'];
      }
    }
    else{
      $lab_image =$this->input->post('lab_image');
    }
    $data = array(
      "lab_type" => !empty($this->input->post('lab_type'))?$this->input->post('lab_type'):'',
      "lab_group" => $this->input->post('lab_group'),
      "lab_title" => $this->input->post('lab_title'),
      "lab_desc" => $this->input->post('lab_desc'),
      "lab_status" => $this->input->post('lab_status'),
      "lab_image" => "$lab_image",
    );
    $this->db->where('lab_id',$this->input->post('lab_id'));
    $this->db->update('master_laboratories_tbl', $data);
    return true;
  }
  public function delete_school_lab(){
      $this->db->where('lab_id', $this->input->post('delete_id'));
      $this->db->delete('master_laboratories_tbl');
      return array( 'status'=>'success',
        'message'=>'School Lab has been Deleted Successfully!'
      );
  }
  //==============================School Lab End//======================================//




   //===============================School Campus Start============ ========================//

    public function get_all_school_campus(){
    $this->db->select('*');
    $res = $this->db->get('master_campus_tbl')->result();
    return $res;
  }

  
  public function get_a_school_campus($id){
    $this->db->select('*');
    $this->db->where('campus_id', $id);
    $res = $this->db->get('master_campus_tbl')->result();
    return $res;
  }
  public function insert_school_campus(){
    if(!empty($_FILES['campus_image']['name'])){
      $config['file_name'] = $_FILES['campus_image']['name'];
      $config['upload_path'] = 'uploads/campus';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['campus_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('campus_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['campus_image'])) { 
          if(file_exists($config['campus_image'].$update_data['campus_image'])){
          unlink($config['upload_path'].$update_data['campus_image']); /* deleting Image */
          } 
        }
        $campus_image = $uploadData['file_name'];
      }
    }
    else{
      $campus_image ='';
    }
    $data = array(
      "campus_title" => $this->input->post('campus_title'),
      "campus_desc" => $this->input->post('campus_desc'),
      "campus_status" => $this->input->post('campus_status'),
      "campus_image" => "$campus_image",
    );
    $this->db->insert('master_campus_tbl', $data);
    return true;
  }
  public function update_school_campus(){
    if(!empty($_FILES['lab_image']['name'])){
      $config['file_name'] = $_FILES['campus_image']['name'];
      $config['upload_path'] = 'uploads/campus';
      $config['allowed_types'] = 'jpg|jpeg|png|pdf';
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $_FILES['campus_image']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('campus_image')){
        $uploadData = $this->upload->data();  
        if (!empty($update_data['campus_image'])) { 
          if(file_exists($config['campus_image'].$update_data['campus_image'])){
          unlink($config['upload_path'].$update_data['campus_image']); /* deleting Image */
          } 
        }
        $campus_image = $uploadData['campus_image'];
      }
    }
    else{
      $campus_image =$this->input->post('campus_image');
    }
    $data = array(
      "campus_title" => $this->input->post('campus_title'),
      "campus_desc" => $this->input->post('campus_desc'),
      "campus_status" => $this->input->post('campus_status'),
      "campus_image" => "$lab_image",
    );
    $this->db->where('campus_id',$this->input->post('lab_id'));
    $this->db->update('master_campus_tbl', $data);
    return true;
  }
  public function delete_school_campus(){
      $this->db->where('campus_id', $this->input->post('delete_id'));
      $this->db->delete('master_campus_tbl');
      return array( 'status'=>'success',
        'message'=>'School Campus has been Deleted Successfully!'
      );
  }
  //==============================School Campus End//======================================//







  //Dashboard
  public function dashboard_statics(){
    $all_aavedan =0;
    $print_praman =0;
    $print_bhavan =0;

    //---0
    $this->db->select("count(m_app_id) as 'total'");
    $this->db->from("aavas_yojna_application_tbl");
    $this->db->get(); 
    $all_aavedan = $this->db->last_query();

    //---1
    $this->db->select("count(m_app_id) as 'total'");
    $this->db->from("aavas_yojna_application_tbl");
    $this->db->where('m_is_print',1);
    $this->db->get(); 
    $print_praman = $this->db->last_query();
    //---2
    $this->db->select("count(m_app_id) as 'total'");
    $this->db->from("aavas_yojna_application_tbl");
    $this->db->where('m_is_bulding_print',1);
    $this->db->get(); 
    $print_bhavan = $this->db->last_query();

    $query = $this->db->query($all_aavedan." UNION ALL ".$print_praman." UNION ALL ".$print_bhavan);
    return $query->result();
  }
  public function get_all_aavas_yojna_applicant(){
    $this->db->select('*');
    $this->db->order_by('m_app_id','DESC');
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    return $res;
  }
  public function get_aavas_yojna_applicant($app_id=''){
    $this->db->select('*');
    $this->db->join('master_ward_number_tbl','master_ward_number_tbl.m_ward_no = aavas_yojna_application_tbl.m_ward_no','left');
    $this->db->where('m_app_id',$app_id);
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    return $res;
  }
  public function delete_aavas_yojna_applicant(){
      $this->db->where('m_app_id', $this->input->post('delete_id'));
      $this->db->delete('aavas_yojna_application_tbl');
      return array( 'status'=>'success',
        'message'=>'Deleted Successfully!'
      );
  }
  public function first_time_print(){
    $data = array(
      "m_is_print" => 1,
    );
    $this->db->where('m_app_id',$this->input->post('app_id'));
    $this->db->update('aavas_yojna_application_tbl', $data);
    return true;
  }
  public function checked_print(){
    $data =array();
    $this->db->where('m_app_id',$this->input->post('app_id'));
    $this->db->where('m_is_print',1);
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    if(!empty($res)){
      $data['status']=1;
    }
    else{
      $data['status']=0;
    }
    return json_encode($data);
  }
  public function first_time_buiding_print(){
    $data = array(
      "m_is_bulding_print" => 1,
    );
    $this->db->where('m_app_id',$this->input->post('app_id'));
    $this->db->update('aavas_yojna_application_tbl', $data);
    return true;
  }
  public function checked_building_print(){
    $data =array();
    $this->db->where('m_app_id',$this->input->post('app_id'));
    $this->db->where('m_is_bulding_print',1);
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    if(!empty($res)){
      $data['status']=1;
    }
    else{
      $data['status']=0;
    }
    return json_encode($data);
  }
  public function insert_ward(){
    $data = array(
      "m_ward_no" => $this->input->post('m_ward_no'),
      "m_ward_name" => $this->input->post('m_ward_name'),
      "m_ward_gram_name" => $this->input->post('m_ward_gram_name'),
      "m_ward_status" => 1,
      "m_ward_added_on" => date('Y-m-d H:i'),
    );
    $this->db->insert('master_ward_number_tbl', $data);
    return true;
  }
  public function get_all_ward(){
    $res = $this->db->get('master_ward_number_tbl')->result();
    return $res;
  }
  public function get_a_ward($id){
    $this->db->select('*');
    $this->db->where('m_ward_id', $id);
    $res = $this->db->get('master_ward_number_tbl')->result();
    return $res;
  }
  public function update_ward(){
    $data = array(
      "m_ward_no" => $this->input->post('m_ward_no'),
      "m_ward_name" => $this->input->post('m_ward_name'),
      "m_ward_gram_name" => $this->input->post('m_ward_gram_name'),
      "m_ward_status" => 1,
      "m_ward_added_on" => date('Y-m-d H:i'),
    );
    $this->db->where('m_ward_id',$this->input->post('m_ward_id'));
    $this->db->update('master_ward_number_tbl', $data);
    return true;
  }
  public function delete_ward(){
      $this->db->where('m_ward_id', $this->input->post('delete_id'));
      $this->db->delete('master_ward_number_tbl');
      return array( 'status'=>'success',
        'message'=>'Ward has been Deleted Successfully!'
      );
  }

  //Project
  public function insert_project(){
    $data = array(
      "m_project_name" => $this->input->post('m_project_name'),
      "m_project_code" => $this->input->post('m_project_code'),
      "m_project_engineer" => $this->input->post('m_project_engineer'),
      "m_project_added_on" => date('Y-m-d H:i'),
    );
    $this->db->insert('master_project_tbl', $data);
    return true;
  }
  public function get_all_project(){
    $res = $this->db->get('master_project_tbl')->result();
    return $res;
  }
  public function get_a_project($id){
    $this->db->select('*');
    $this->db->where('m_project_id', $id);
    $res = $this->db->get('master_project_tbl')->result();
    return $res;
  }
  public function update_project(){
    $data = array(
      "m_project_name" => $this->input->post('m_project_name'),
      "m_project_code" => $this->input->post('m_project_code'),
      "m_project_engineer" => $this->input->post('m_project_engineer'),
      "m_project_added_on" => date('Y-m-d H:i'),
    );
    $this->db->where('m_project_id',$this->input->post('m_project_id'));
    $this->db->update('master_project_tbl', $data);
    return true;
  }
  public function delete_project(){
      $this->db->where('m_project_id', $this->input->post('delete_id'));
      $this->db->delete('master_project_tbl');
      return array( 'status'=>'success',
        'message'=>'Project has been Deleted Successfully!'
      );
  }
  public function get_all_printed_praman_patra(){
    $this->db->where('m_is_print',1);
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    return $res;
  }
  public function get_all_printed_bhavan_anuggya(){
    $this->db->where('m_is_bulding_print',1);
    $res = $this->db->get('aavas_yojna_application_tbl')->result();
    return $res;
  }
}
?>