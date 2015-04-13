<?php

	class ProfileModel extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function getFriends() {
			$user = $this->session->userdata('userid');
			//$user = 1;

			$this->db->from('tbl_user, tbl_link_f_u');
			$this->db->where('tbl_link_f_u.user_id = tbl_user.user_id AND tbl_user.user_id <> '.$user.' AND tbl_link_f_u.friend_id = '.$user);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function checkfriend($id) {
			$user = $this->session->userdata('userid');

			$this->db->from('tbl_user, tbl_link_f_u');
			$this->db->where('tbl_link_f_u.user_id = tbl_user.user_id AND tbl_user.user_id = '.$user.' AND tbl_link_f_u.friend_id = '.$id);
			$query = $this->db->get();

			if($query->num_rows() > 0) {
				return TRUE;
			} else {
				return FAlSE;
			}
		}

		public function addfriend($id) {
			$user = $this->session->userdata('userid');

			$friend01 = array(
				'link_f_u_id' => NULL,
				'user_id' => $user,
				'friend_id' => $id
			);

			$friend02 = array(
				'link_f_u_id' => NULL,
				'user_id' => $id,
				'friend_id' => $user
			);

			$this->db->insert('tbl_link_f_u', $friend01);
			$this->db->insert('tbl_link_f_u', $friend02);
		}










//get user profile
		/*public function getUser($id) {
			$this->db->from('tbl_user');
			$this->db->where('user_id = '.$id);
		}*/

		public function getProfile($profileId){
         $query = $this->db->get_where('tbl_user', array('user_id' => $profileId));
         return $query->row_array();   
      }

	}