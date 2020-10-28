<?php

class Login_model extends CI_Model{

	public function admin_Login($data)
	{
	   // print_r($data);
		$this->db->where($data);
		$success=$this->db->get('admins')->result();
		
		if(count($success)>0)
	    {
            // print_r($success);
			$this->session->set_userdata('login',$success);
			return true;
		}
		 else
	    {
	        
			return false;
		}
	}
	public function userLogin($data)
	{
	   // print_r($data);
		$this->db->where($data);
		$success=$this->db->get('user')->result();
		
		if(count($success)>0)
	    {
            // print_r($success);
			$this->session->set_userdata('login',$success);
			return 1;
		}
		 else
	    {
	        
			return 0;
		}
	}
	  public function addUser($data,$email)
	   {
	    $this->db->where('email',$email);
		$re=$this->db->get('user')->result();
		if(count($re)==0)
		{
			$results=$this->db->insert('user',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 2;
	    }
    }
} ?>