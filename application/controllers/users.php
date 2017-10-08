<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model("users_model"); 
    }

    // Default File
	public function index()
	{
		if(!$this->session->userdata('login')) {
			redirect('users/login');
		}
		redirect(base_url().'admin');;
	}

	// View User Single
    public function view($id = NULL)
	{
		$data['post'] = $this->users_model->get_single_data($id);
		$this->load->view('user_view', $data);
	}

	//User Login
		public function login(){
			if($this->session->userdata('login')){
				// Is log in already
			     redirect(base_url());
			}else{
						$data['title'] = 'Log In';

						$this->form_validation->set_rules('username', 'Username', 'required');
						$this->form_validation->set_rules('password', 'Password', 'required');

						if($this->form_validation->run() === FALSE){
							$this->load->view('login', $data);
						}else{
							// get username and Encrypt Password
							$username = $this->input->post('username');
							$encrypt_password = md5($this->input->post('password'));

							$user_id = $this->users_model->login($username, $encrypt_password);
							
							if ($user_id) {
								//Create Session
								$user_data = array(
											'user_id' => $user_id->id,
							 				'username' => $username,
							 				'email' => $user_id->email,
							 				'login' => true
							 	);

							 	$this->session->set_userdata($user_data);

								//Set Message
								$this->session->set_flashdata('ms_true', 'You are now logged in..');
								redirect('admin');
							}else{
								$this->session->set_flashdata('ms_false', 'Login is invalid..');
								redirect('users/login');
							}
							
						}
			}
			
		}


		// log user out
		public function logout(){
			// unset user data
			$this->session->unset_userdata('login');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			//Set Message
			$this->session->set_flashdata('ms_true', 'You are logged out..');
			redirect(base_url());
		}

}
