<?php

  class FriendProfile extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('ProfileModel');
    }


    public function view($profileId){

      if($this->session->userdata('userid')){
        $id = $this->session->userdata('userid');
        //$data['user_username'] = $session_data['user_id'];
        //$id = $session_data['userid'];
        //$data['user'] = $this->ProfileModel->getUser($id);
        $data['user'] = $this->ProfileModel->getProfile($profileId);
        //$data['allUsers'] = $this->user->getAllProfiles($id);
        //$data['friends'] = $this->user->getAllFriends($id);
        //$data['friendClicked'] = $this->user->getAllFriendsWhenClicked($profileId, $id);
        //$data['tracks'] = $this->music_model->getSongs();

        

        if($profileId == $id) {
          redirect('profile');
        }else{
          $this->load->view('header');
          $this->load->view('userprofile', $data);
          $this->load->view('footer');
        }

      }else{
        
        redirect('friends');
      }
    }
  }
