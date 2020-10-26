<?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 class Home extends MY_Controller
	 {
	 	
	 	function __construct()
	 	{
	 		parent::__construct();
	 	}
	 	public function index(){
	 		
	 		$data['categories']=$this->getCategories();
	 		// // $data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// $data['banners_']=$this->db->order_by('rand()')->get('banner_')->result();
	 		$data['crops_']=$this->db->order_by('rand()')->limit(3)->get('crops_')->result();
	 		$data['specialcrops_']=$this->db->order_by('rand()')->limit(3)->get('crops_')->result();
	 		// $data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
	 		$this->load->view('layout/header',$data);
	 		$this->load->view('pages/index');
	 		$this->load->view('layout/footer');
	 	}
	 	public function About(){
	 		$data['categories']=$this->getCategories();
	 		$this->load->view('layout/header');
	 		$this->load->view('pages/about');
	 		$this->load->view('layout/footer');
	 	}
	 	public function Contact(){
	 		$data['categories']=$this->getCategories();
	 		$this->load->view('layout/header');
	 		$this->load->view('pages/contact');
	 		$this->load->view('layout/footer');
	 	}
	 	

	 }

?>