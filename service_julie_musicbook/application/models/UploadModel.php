<?php

	class UploadModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function addSong($filename) {
			$artist = array(
				'artist_id' => NULL,
				'artist_name' => $this->input->post('artistname'),
				'artist_genre' => NULL,
				'artist_album' => NULL,
				'artist_bio' => NULL,
				'artist_image' => "default.jpg"
			);

			$this->db->insert('tbl_artist', $artist);
			$artist_id = $this->db->insert_id();

			$song = array(
				'song_id' => NULL,
				'song_title' => $this->input->post('filename'),
				'song_artist' => $artist_id,
				'song_album' => NULL,
				'song_genre' => NULL,
				'song_mp3' => $filename,
				'song_image' => "1"
			);

			$this->db->insert('tbl_songs', $song);
			$song_id = $this->db->insert_id();

			$link_artSong = array(
				'link_a_s_id' => NULL,
				'artist_id' => $artist_id,
				'song_id' => $song_id
			);

			$this->db->insert('tbl_link_a_s', $link_a_s_id);

			return;
		}

	}