<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slink extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model("link_model"); 
    }

	public function index()
	{
		$this->load->view('link_view');
	}

	public function detail($id = NULL)
	{					
		$data['post'] = $this->link_model->get_single_data($id);
		$data_title = $data['post']['title'];
		$data['title'] = 'My File Share - '.$data_title;
		$this->load->view('link_view', $data);
	}

}
