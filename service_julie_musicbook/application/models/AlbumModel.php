<?php

	class AlbumModel extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function getAlbums() {
			//$this->db->from('tbl_album')
			//$query = $this->db->get('tbl_album')

			$this->db->from('tbl_album');
			//$this->db->where('tbl_album = tbl_album.album_id AND tbl_album.album_id <> '.$album.' AND tbl_album.friend_id = '.$user);
			$query = $this->db->get();//gets all from tbl_albums
			return $query->result_array();//returns results
		}

		public function getAlbumById($id){
			$this->db->from('tbl_album, tbl_link_s_a, tbl_songs');
			$this->db->where('tbl_link_s_a.album_id = tbl_album.album_id AND tbl_link_s_a.song_id = tbl_songs.song_id AND tbl_album.album_id = '.$id);
			$albumQuery = $this->db->get();

			$this->db->from('tbl_album, tbl_link_s_a, tbl_songs');
			$this->db->where('tbl_link_s_a.album_id = tbl_album.album_id AND tbl_link_s_a.song_id = tbl_songs.song_id AND tbl_album.album_id = '.$id);
			$songQuery = $this->db->get();

			if($songQuery->num_rows() == 0) {
				$this->db->from('tbl_album');
				$this->db->where('tbl_album.album_id = '.$id);
				$albumQuery = $this->db->get();

				return array(
					'album' => $albumQuery->row_array(),
					'rows' => FALSE
				);
			}
			return array(
				'album' => $albumQuery->row_array(),
				'songs' => $songQuery->result_array(),
				'rows' => TRUE
			);

			//return $query->row_array();
		}
		

	}