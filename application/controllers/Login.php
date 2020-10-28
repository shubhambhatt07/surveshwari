<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct(){

		parent::__construct();
		
		 $this->load->model('Login_model');
	}
	
	public function index()
	{
		$this->load->view('admin/Pages/login');
		$this->session->sess_destroy();
	}

	public function login_validate()
	{
		$data=array("email"=>$this->input->post('email'),
					"password"=>base64_encode($this->input->post('password')));

		$result=$this->Login_model->admin_Login($data);
		if($result)
		{
			redirect('Dashboard/viewDashbaord');;
		}
		else
		{
		   
		   $this->session->set_flashdata('msg','Invalid Email Or Password');
			redirect('Login');
		   // redirect('Dashboard/viewDashbaord');;
		}
	}
	public function logOut(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}

	public function userLogin()
	{
	$this->load->view('layout/header');
	$this->load->view('pages/login');
	$this->load->view('layout/footer');
	}
	public function Register()
	{
	$this->load->view('layout/header');
	$this->load->view('pages/register');
	$this->load->view('layout/footer');
	}
	public function userRegistration()
	{
	$email=$this->input->post('email');
	$data=array(
				"name"=>$this->input->post('fname'),
				"lname"=>$this->input->post('lname'),
				"email"=>$email,
				"password"=>$this->input->post('pass'),
				"address"=>$this->input->post('address'),
				"gender"=>$this->input->post('gender'),
				"phone"=>$this->input->post('phone'));
		
// print_r($data);
// die;
	$response=$this->Login_model->addUser($data,$email);
	if($response==1)
     	{
     		die(json_encode(array('status'=>'1','data'=>'Successfull')));
     	}
     	elseif ($results==2)
     	 {
     		die(json_encode(array('status'=>'2','data'=>'Already Exist')));
 		 }
 		 else
 		 {
 		 	die(json_encode(array('status'=>'0','data'=>'Try Again')));
 		 }
        	  
	}
	public function user_validate()
	{
		$data=array("email"=>$this->input->post('email'),
					"password"=>$this->input->post('pass'));
		$result=$this->Login_model->userLogin($data);
		if($result==1)
		{
			die(json_encode(array('status'=>'1','data'=>'Successfull')));
		}
		else
		{
		   
		 //   $this->session->set_flashdata('msg','Invalid Email Or Password');
			// redirect('Login/userLogin');
			die(json_encode(array('status'=>'0','data'=>'Not Valid')));
		   // redirect('Dashboard/viewDashbaord');;
		}
	}

	
	
}