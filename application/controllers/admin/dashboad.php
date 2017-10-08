<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboad extends CI_Controller{

    function __construct() {
        parent::__construct();
        // Check login
        if(!$this->session->userdata('login')) {
            redirect('users/login');
        }
    }

    public function index(){
        $data['title'] = "My File Share";
        //$data = NULL;
        $data['page_content'] = $this->load->view('admin/dashboad',$data, TRUE);
        $this->load->view('admin/index', $data);
    }

}