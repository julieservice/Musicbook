<?php
class albumdetail extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('AlbumModel');
		}


		public function view($albumid){
			$data['array'] = $this->AlbumModel->getAlbumById($albumid);
			$this->load->view('header');
			$this->load->view('albumdetail',$data);
			$this->load->view('footer');

		}
}