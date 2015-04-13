<?php
 

 class SearchModel extends CI_Model{
 	public function __construct(){
 		parent::__construct();
 	}

 	public function searchAll($str=NULL){
 		$this->db->from('tbl_artist');
 		$this->db->like('artist_name', $str);
 		$this->db->order_by('tbl_artist.artist_name','asc');
 		$query = $this->db->get();

 		return $query->result_array();
 	}
 }