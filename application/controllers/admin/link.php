<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class link extends CI_Controller{

	function __construct() {
        parent::__construct();         
        // Check login
        if(!$this->session->userdata('login')) {
            redirect('users/login');
        }
        $this->load->model("link_model");
    }

    public function index(){
        redirect('admin/link/view');
    }

    // Data View
    public function view(){
    	$data['title'] = 'Manage Other Link Download';
        $data['getdata'] = $this->link_model->select();
        $data['page_content'] = $this->load->view('admin/link', $data, true);
        $this->load->view('admin/index', $data);
    }

    // Edit View
    public function edit(){
        $data['title'] = 'Edit Link Download';
        $data['page_content'] = $this->load->view('admin/link_edit', $data, true);
        $this->load->view('admin/index', $data);
    }

    // Inser and Update
    public function add_edit($id='') {  
        $data = $this->input->post();
        if($id = $this->input->post('id')) {
          unset($data['submit']);
          unset($data['fileOld']);
          unset($data['save']);
          unset($data['id']);
          $this->link_model->updateRow('link_download', 'id', $id, $data);          
          $this->session->set_flashdata('ms_true', 'Your data updated Successfully..');
          redirect('admin/link/view'); 
        } else { 
          unset($data['submit']);
          unset($data['fileOld']);
          unset($data['save']);
          $insert_id = $this->link_model->insertRow('link_download', $data);
          $this->session->set_flashdata('ms_true', 'Your data inserted Successfully..');
          redirect('admin/link/view');
        }
    }   


    // Delete Data by ID
    public function delete($id){
          $this->link_model->delete($id);
          $this->session->set_flashdata('ms_true', 'Your link post has been deleted.');          
          redirect(base_url().'admin/link/view', 'refresh');
    } 



}