<?php

/*error_reporting(-1);
ini_set('upload_max_filesize', '75M');
ini_get();*/

	class Upload extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('UploadModel');
		}

		public function index() {
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('share');
			//$this->load->view('upload_form', array('error' => ''));
			$this->load->view('footer');
		}

		public function do_upload() {		
			

			$filename = $config['file_name'] = "song".time();

			$config['upload_path'] = './songs/';
			$config['allowed_types'] = 'mp3';
			$config['max_size']	= '10000';

			$filefield = "songfile";

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload($filefield)) {
				//upload isn't filled in

				$this->load->view('header');
				$this->load->view('share');
				$this->load->view('errors');
				$this->load->view('footer');
			}

			else {
				$this->form_validation->set_rules('song', 'Song', 'required');
				$this->form_validation->set_rules('artist', 'Artist', 'required');

				if ($this->form_validation->run() === FALSE) {
					//form fields aren't filled in
					$this->load->view('header');
					$this->load->view('share');
					$this->load->view('upload_success');
					//$this->load->view('errors');
					$this->load->view('footer');
				} else {
					//add to database
					$this->UploadModel->addSong($filename);

					$this->load->view('header');
					$this->load->view('share');
					$this->load->view('upload_success');
					$this->load->view('footer');
				}
			}
		}
	}