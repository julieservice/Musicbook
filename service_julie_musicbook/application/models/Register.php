<?php


	class Register extends CI_Model{


		public function __construct(){
			parent::__construct();
		}

		public function register() {
			$checkuser = $this->input->post('username');
			$check = $this->db->get_where('tbl_user',array('user_username'=>$checkuser));
			if($check->num_rows() > 0){return "exist";}
			$user = array(
				'user_id' => NULL,
				'user_fname' => $this->input->post('fname'),
				'user_lname' => $this->input->post('lname'),
				'user_username' => $this->input->post('username'),
				'user_password' => $this->input->post('password'),
				'user_email' => $this->input->post('email'),
				'user_image' => 'default_profile.jpg'
			);
			$this->db->insert('tbl_user',$user);
		}
	}