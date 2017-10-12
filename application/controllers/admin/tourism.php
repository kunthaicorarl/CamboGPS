<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tourism extends CI_Controller{

	function __construct() {
        parent::__construct();         
        // Check login
        if(!$this->session->userdata('login')) {
            redirect('users/login');
        }
        $this->load->model("tourism_model");
    }

    public function index(){
        redirect('admin/tourism/view');
    }
    public function view(){
    	$data['title'] = 'Manage Tourism';
    	$data['getdata'] = $this->tourism_model->select();
        $data['page_content'] = $this->load->view('admin/tourism', $data, true);
        $this->load->view('admin/index', $data);
    }
    public function edit($id = NULL)
	{	 if($id==null){
        $data['title'] = 'Add Tourism';
          }else {
            $data['title'] = 'Edit Tourism';
          }
       
          $data['data'] = $this->tourism_model->get_single_data($id);
         $data['page_content'] = $this->load->view('admin/tourism_edit', $data, true);
         $this->load->view('admin/index', $data);
	}

    public function detail($id = NULL)
	{	
        $data['title'] = 'Edit Tourism ss';
        $data['data'] = $this->tourism_model->get_single_data($id);
        $data['page_content'] = $this->load->view('admin/tourism_detail', $data, true);
         $this->load->view('admin/index', $data);
	}
	public function multiple_upload()
	{   $final_files_data=array();
	    $this->load->library('upload');
	    $number_of_files_uploaded = count($_FILES['thumbnail']['name']);
	    // Faking upload calls to $_FILE
	    for ($i = 0; $i < $number_of_files_uploaded; $i++) :
	    $_FILES['thumbnail']['name']     = $_FILES['thumbnail']['name'][$i];
	    $_FILES['thumbnail']['type']     = $_FILES['thumbnail']['type'][$i];
	    $_FILES['thumbnail']['tmp_name'] = $_FILES['thumbnail']['tmp_name'][$i];
	    $_FILES['thumbnail']['error']    = $_FILES['thumbnail']['error'][$i];
	    $_FILES['thumbnail']['size']     = $_FILES['thumbnail']['size'][$i];
	    $exp=explode('.',  $_FILES['thumbnail']['name']);
	    $ext=end($exp);
	    $newname=  $exp[0].'_'.time().".".$ext; 
	    $config = array(
	        'file_name'     =>$newname,
	        'allowed_types' => 'jpg|jpeg|png|gif',
	        'max_size'      => 3000,
	        'overwrite'     => FALSE,
	        
	        /* real path to upload folder ALWAYS */
	        'upload_path'
	        =>base_url().'assets/images/'//$_SERVER['DOCUMENT_ROOT'] . '/path/to/upload/folder'
	    );
	    $this->upload->initialize($config);
	    if ( ! $this->upload->do_upload()) :
	    $error = array('error' => $this->upload->display_errors());
	   // $this->load->view('upload_form', $error);
	    else :
	    $final_files_data[] = $this->upload->data();
	    // Continue processing the uploaded data
	    return $this->upload->data();
	    endif;
	    endfor;
	   
	}
    function upload() {
        $data=array();
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = 'assets/images/';
            $config['upload_url'] =  base_url().'assets/images/';
            $config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
            $config['max_size'] = '2000000'; 
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/images/".$newname);
         //   array_push($data,$newname);
           return $data;//$newname;
        }
       
    }
    
    // Inser and Update
    public function add_edit($id='') {  
        $data = $this->input->post();
        if($id = $this->input->post('id')) {
          unset($data['submit']);
          unset($data['fileOld']);
          unset($data['save']);
          unset($data['id']);

          foreach($_FILES as $name => $fileInfo)
          { 
               if(!empty($_FILES[$name]['name'])){
                  $newname=$this->upload(); 
                 
                 $data['thumbnail']=$newname;
                //  $profile_pic =$newname;
               }
          }
            
         
          $this->tourism_model->updateRow('tourism', 'id', $id, $data);          
          $this->session->set_flashdata('ms_true', 'Your data updated Successfully..');
          redirect('admin/tourism/view'); 
        } else { 
            $file_Name_data=$this->multiple_upload();
            print_r($file_Name_data);
            die();
          unset($data['submit']);
          unset($data['fileOld']);
          unset($data['save']);
          $data['status']=1;
          $insert_id = $this->tourism_model->insertRow('tourism', $data);
          $this->session->set_flashdata('ms_true', 'Your data inserted Successfully..');
          redirect('admin/tourism/view');
        }
    }   

    public function delete($id){
        $this->tourism_model->delete($id);
          $this->session->set_flashdata('ms_true', 'Your link post has been deleted.');          
          redirect(base_url().'admin/tourism/view', 'refresh');
    } 



}