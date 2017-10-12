<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class province extends CI_Controller{

	function __construct() {
        parent::__construct();         
        // Check login
        if(!$this->session->userdata('login')) {
            redirect('users/login');
        }
        $this->load->model("provinces_model"); 
    }

    public function index(){
        redirect('admin/province/view');
    }
    public function view(){
    	$data['title'] = 'Manage Province';
        $data['getdata'] = $this->provinces_model->select();
        $data['page_content'] = $this->load->view('admin/province', $data, true);
        $this->load->view('admin/index', $data);
    }
    public function edit($id = NULL)
	{	 if($id==null){
        $data['title'] = 'Add Province';
          }else {
            $data['title'] = 'Edit Province';
          }
       
        $data['data'] = $this->provinces_model->get_single_data($id);
        $data['page_content'] = $this->load->view('admin/province_edit', $data, true);
         $this->load->view('admin/index', $data);
	}

    public function detail($id = NULL)
	{	
        $data['title'] = 'Edit Province ss';
        $data['data'] = $this->provinces_model->get_single_data($id);
        $data['page_content'] = $this->load->view('admin/province_detail', $data, true);
         $this->load->view('admin/index', $data);
	}
   
    function upload() {
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
            return $newname;
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
            
         
          $this->provinces_model->updateRow('provinces', 'id', $id, $data);          
          $this->session->set_flashdata('ms_true', 'Your data updated Successfully..');
          redirect('admin/province/view'); 
        } else { 
            foreach($_FILES as $name => $fileInfo)
            { 
                 if(!empty($_FILES[$name]['name'])){
                    $newname=$this->upload(); 
                    $data['thumbnail']=$newname;
                  //  $profile_pic =$newname;
                 }
            }        
          unset($data['submit']);
          unset($data['fileOld']);
          unset($data['save']);
          $data['status']=1;
//           print_r($data);
//           die();
          $insert_id = $this->provinces_model->insertRow('provinces', $data);
          $this->session->set_flashdata('ms_true', 'Your data inserted Successfully..');
          redirect('admin/province/view');
        }
    }   

    public function delete($id){
          $this->provinces_model->delete($id);
          $this->session->set_flashdata('ms_true', 'Your link post has been deleted.');          
          redirect(base_url().'admin/province/view', 'refresh');
    } 



}