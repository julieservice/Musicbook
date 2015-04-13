<?php

	class Friends extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('ProfileModel');
			$this->load->model('UserlistModel');
		}

		public function addfriend($id) {
			if($this->session->userdata('userid')) {
				$checkfriend = $this->ProfileModel->checkfriend($id);
				if($checkfriend == TRUE) {
					$data['allusers'] = $this->UserlistModel->getUser();
						$this->load->view('header');
						$this->load->view('frienderror');
						$this->load->view('friends' ,$data);
						$this->load->view('footer');
					//echo "user is already a friend"; 
				} else {
					$this->ProfileModel->addfriend($id);
					$data['allusers'] = $this->UserlistModel->getUser();
					//echo "friend added";
					//redirect('friendsuccess'); 

					$this->load->view('header');
					$this->load->view('friendsuccess');
					$this->load->view('friends', $data);
					$this->load->view('footer');
				}
			} else {
				redirect('');
			}
		}

	}