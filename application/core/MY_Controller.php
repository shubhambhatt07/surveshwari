<?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 class MY_Controller extends CI_Controller
	 {
	 	
	 	function __construct()
	 	{
	 		parent::__construct();
	 	}
	 	public function index(){
	 		// $data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$this->load->view('layout/header');
	 		$this->load->view('pages/about');
	 		$this->load->view('layout/footer');
	 	}
	 	public function getCategories(){
	 		return $this->db->get('categories')->result();
	 	}
	 	
	 }

?>