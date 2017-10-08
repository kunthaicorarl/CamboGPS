<?php
	class users_model extends CI_Model
	{
		public function __construct()
		{
			//if in file autoload not config database
			//$this->load->database();
		}

		public function get_single_data($id = FALSE)
		{
			$query = $this->db->get_where('users', array('id' => $id));
			return $query->row_array();
		}

		public function login($username, $encrypt_password){
			//Validate
			$this->db->where('username', $username);
			$this->db->where('password', $encrypt_password);

			$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}


	}