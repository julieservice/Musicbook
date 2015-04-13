<?php

	class PlaylistModel extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function getPlaylist() {
			//$this->db->from('tbl_album')
			//$query = $this->db->get('tbl_album')

			$this->db->from('tbl_playlist');
			//$this->db->where('tbl_album = tbl_album.album_id AND tbl_album.album_id <> '.$album.' AND tbl_album.friend_id = '.$user);
			$query = $this->db->get();//gets all from tbl_playlist
			return $query->result_array();//returns results
		}

		

	}