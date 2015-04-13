<?php

	class Pages extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Register');
			$this->load->model('Login');
		}

		public function index(){
			//On page arrival default header, landing and footer
			$this->load->view('header');
			$this->load->view('landing');
			$this->load->view('footer');
		}

		public function view($page) {
			//On all other pages, always display header and footer
			$this->load->view('header');

			if($page == "signup") {
				$this->load->view('landing_signup');
			}

			$this->load->view('footer');
		}

		public function register(){ //landing_signup
			$this->form_validation->set_rules('fname','First Name','required');//set form rules ie. first name is required
			$this->form_validation->set_rules('lname','Last Name','required');
			$this->form_validation->set_rules('email','E-mail','trim|required|valid_email');
			$this->form_validation->set_rules('username','User Name','trim|required|alpha_dash|xss_clean');//alpha_dash can use both letters and numbers
			$this->form_validation->set_rules('password','Password','trim|required|alpha_dash');

			if($this->form_validation->run() === FALSE){//if form validation is false, if it not filled out according to rules
				//$this->load->view('header');
				$this->load->view('formerrors');//form errors will appear
				//$this->load->view('landing_signup');
				//$this->load->view('footer');
			} else{
				$check = $this->Register->register();
				if($check == 'exist'){//checking if user name already exists
					$data['user_error'] = "Username alredy exist";//if it does exist already

					//$this->load->view('header');
					$this->load->view('usererrors', $data);
					//$this->load->view('landing_signup');
					//$this->load->view('footer');

				} else{

					//$this->load->view('header');//if user name doesnt exist and form is valid
					$this->load->view('success');
					//$this->load->view('landing_signup');
					//$this->load->view('footer');
				}
			}
		}

		public function login(){//once registeed user can now login

			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('formerrors');
				$this->load->view('landing');
				$this->load->view('footer');
			}else{
				$user = $this->Login->login();
				if($user == FALSE){
					$data['user_error'] = "Username or password is incorrect";
					$this->load->view('header');
					$this->load->view('usererrors', $data);
					$this->load->view('landing');
					$this->load->view('footer');
				}
				else{
					//session_start();
					$sess = $this->Login->session($user);

					/*$data = array(
						'userid' => $this->session->userdata('userid'),
						'fname' => $this->session->userdata('fname'),
						'lname' => $this->session->userdata('lname'),
						'username' => $this->session->userdata('username'),
						'password' => $this->session->userdata('password'),
						'email' => $this->session->userdata('email'),
						'image' => $this->session->userdata('image'),
					);*/
					redirect('page/home');

				}
			}
		}

		public function logout() {//on sign out, session is distroyed and will redirct to landing page
			$this->session->sess_destroy();
			redirect('welcome');
		}

	} 