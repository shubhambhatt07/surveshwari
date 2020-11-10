<?php
class Payments extends CI_Controller
{
	public function DoPaymentsss()
	{
			$this->load->view('common/header');
	 		$this->load->view('pages/home');
	 		$this->load->view('common/footer');
	 		
	}
	public function Payumoneyyyy()
	{
			$this->load->view('layout/header');
	 		$this->load->view('pages/payindex');
	 		$this->load->view('layout/footer');
	}
	
	public function DoPayments()
	{
		$payeby=unserialize($this->session->deliveryAddress);
	   $paymethod=$payeby['paymentMethod'];
	   if( $paymethod=='online')
	   {
	   	$data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$data['webDetail']=$this->db->get('website_name_logo')->row();
	 		$data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
		$cartItems=$this->cart->contents();
	 		$productIdArr=array();
	 		$priceArr=array();
	 		$quantArr=array();
	 		$paymentMode="Cash";
	 		$order=array();
	 		$total=0;
	 		$tax=0.18;
	 		foreach ($cartItems as $key => $value) {
	 			$productIdArr[]=$value['options']['product_id'];
	 			$priceArr[]=$value['price'];
	 			$quantArr[]=$value['qty'];
	 			$total+=$value['price']*$value['qty'];  
	 		}
	 		$taxAmount=$total*$tax;
	 		$orderAmount=$taxAmount+$total;
	 		$session=unserialize($this->session->logged_user);
	 		array_push($order,array("productId"=>$productIdArr,"quantity"=>$quantArr,"price"=>$priceArr,"total"=>$total,"order_amount"=>$orderAmount));
	 		// print_r($order);
	 		$order_no=date('dmYhis');
	 		$orderDetails=array(
	 							"order_no"=>$order_no,
	 							"cart_details"=>serialize($order),
	 							"user_id"=>$session[0]->id,
	 							"payment_mode"=>1,
	 							"amount_status"=>2,
	 							"deli_add"=>$this->session->deliveryAddress
	 							);
	 		if(count($this->db->where($orderDetails)->get('orders_')->result())==0){
		 			if($this->db->insert('orders_',$orderDetails)){
		 				
		 				// $this->cart->destroy();
		 				$session=unserialize($this->session->userdata('logged_user'));
						$user_phone=$session[0]->phone;
		 				$data['order_details']=array(
		 					"productinfo"=>$order_no,
		 					"amount"=>$this->input->post('total_price'),
		 					"txnid"=>'REF-'.$order_no,
		 					"email"=>$session[0]->email,
		 					"firstname"=>$session[0]->name,
		 					"phone"=>$user_phone,
		 					"address"=>$session[0]->address,
		 					"service_provider"=>"payu_paisa",
		 				);

		 				// $this->load->view('common/header',);
				 		$this->load->view('pages/home',$data);
				 		// $this->load->view('common/footer');
		 				
		 			}else{
		 				$this->session->set_flashdata('msg','Failed To Placed Order.');
		 			}
		 		}
		 		else{
		 			$this->session->set_flashdata('msg','Order Already Exists.');
		 		}
	   }
	   else
	   {
	   	$this->orderPlaced();
	   	
	   }
	   

	}
	public function orderPlaced(){
	 		print_r($this->session->deliveryAddress);
	 		$payeby=unserialize($this->session->deliveryAddress);
	   		$paymethod=$payeby['paymentMethod'];
	   		
	 		$data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$data['webDetail']=$this->db->get('website_name_logo')->row();
	 		$data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
	 		$data['paymentmethod'] = $paymethod;
	 		// print_r($data['paymentmethod']);
	 		// echo'gud';
	 		// die;
	 		$cartItems=$this->cart->contents();
	 		$productIdArr=array();
	 		$priceArr=array();
	 		$quantArr=array();
	 		$paymentMode="Cash";
	 		$order=array();
	 		$total=0;
	 		$tax=0.18;
	 		foreach ($cartItems as $key => $value) {
	 			$productIdArr[]=$value['options']['product_id'];
	 			$priceArr[]=$value['price'];
	 			$quantArr[]=$value['qty'];
	 			$total+=$value['price']*$value['qty'];  
	 		}
	 		$taxAmount=$total*$tax;
	 		$orderAmount=$taxAmount+$total;
	 		$session=unserialize($this->session->logged_user);
	 		array_push($order,array("productId"=>$productIdArr,"quantity"=>$quantArr,"price"=>$priceArr,"total"=>$total,"order_amount"=>$orderAmount));
	 		// print_r($order);
	 		$orderDetails=array(
	 							"order_no"=>date('dmYhis'),
	 							  // "cart_details"=>serialize($or),
	 							"cart_details"=>serialize($order),
	 							"user_id"=>$session[0]->id,
	 							"payment_mode"=>1,
	 							"amount_status"=>2,
	 							"deli_add"=>$this->session->deliveryAddress
	 							);
	 		// print_r($orderDetails);
	 		// die;
	 		if($this->session->userdata('deliveryAddress')){
	 			if(count($this->db->where($orderDetails)->get('orders_')->result())==0){
		 			if($this->db->insert('orders_',$orderDetails)){
		 				$this->session->set_flashdata('msg','Order Placed.');
		 				$this->cart->destroy();
		 				$this->session->unset_userdata('deliveryAddress');
		 			}else{
		 				$this->session->set_flashdata('msg','Failed To Placed Order.');
		 			}
		 		}else{
		 			$this->session->set_flashdata('msg','Order Already Exists.');
		 		}	
	 		}else{
	 			redirect('Home');
	 		}
	 		
	 		// print_r($orderDetails);
	 		$this->load->view('common/header',$data);
	 		$this->load->view('pages/orderPlaced');
	 		$this->load->view('common/footer');
	 	}
}