<?php

	class UserlistModel extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function getUser() {
			$this->db->from('tbl_user');
			$query = $this->db->get();//gets all from tbl_users
			return $query->result_array();//returns results
		}

		

	}