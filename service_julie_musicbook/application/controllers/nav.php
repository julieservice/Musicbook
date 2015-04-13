<?php


class Nav extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('ProfileModel');
			$this->load->model('AlbumModel');
			$this->load->model('UserlistModel');
			$this->load->model('PlaylistModel');
		}

		public function view($page) {
			if($this->session->userdata('userid')){
				$this->load->view('header');

			if($page == "home") {
					$data = array(
						'userid' => $this->session->userdata('userid'),
						'fname' => $this->session->userdata('fname'),
						'lname' => $this->session->userdata('lname'),
						'username' => $this->session->userdata('username'),
						'password' => $this->session->userdata('password'),
						'email' => $this->session->userdata('email'),
						'image' => $this->session->userdata('image')
					);
					$data['playlist'] = $this->PlaylistModel->getPlaylist(); //data= albums array, calls to the AlbumModel to the getAlbums function
					$data['friends'] = $this->ProfileModel->getFriends();
					$this->load->view('home', $data);
				}
				if($page == "discover") {
					$data['albums'] = $this->AlbumModel->getAlbums(); //data= albums array, calls to the AlbumModel to the getAlbums function
					$this->load->view('discover', $data);//loads discover view then passes it data^ from above
				}
				if($page == "share") {
					$this->load->view('share');
				}
				if($page == "friends") {
					//$data['test'] = "test";
					$data['playlist'] = $this->PlaylistModel->getPlaylist(); //data= albums array, calls to the AlbumModel to the getAlbums function
					$data['allusers'] = $this->UserlistModel->getUser();

					$this->load->view('friends', $data);
				}

				$this->load->view('footer');
			}else{
				redirect('welcome');
			}
		}

	} 