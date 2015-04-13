<?php

	class Login extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function login(){
			
			$loguser = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);
			//getting username and password from tbl_user in an array
			$query = $this->db->get_where('tbl_user', array(
				'user_username'=>$loguser['username'],
				'user_password'=>$loguser['password']
			));

			if($query->num_rows() == 0){
				return FALSE;
			}else{
				return $query->row_array();
			}
		}
		//session
		public function session($user = NULL){
			if(!$user == NULL) {
				session_start();
				$this->db->from('tbl_user');
				$this->db->where('tbl_user.user_id = '.$user['user_id']);
				$query = $this->db->get();
				$results = $query->row_array();

				$userdata = array(
					'userid' => $results['user_id'],
					'fname' => $results['user_fname'],
					'lname' => $results['user_lname'],
					'username' => $results['user_username'],
					'password' => $results['user_password'],
					'email' => $results['user_email'],
					'image' => $results['user_image'],
				);

				$this->session->set_userdata($userdata);

				return;
			} else {
				return;
			}
		}


	}