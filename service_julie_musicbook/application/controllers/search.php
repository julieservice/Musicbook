<?php

class Search extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('SearchModel');
	}

	public function send($str=NULL){
		$list = $this->SearchModel->searchAll($str);
		$names = json_encode($list);
		echo $names;
	}

}