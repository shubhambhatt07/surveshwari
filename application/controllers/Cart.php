<?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 class Cart extends MY_Controller
	 {
	 	
	 	function __construct()
	 	{
	 		parent::__construct();
	 	}
	 	public $deliAddressDetails="";
	 	public function index(){
	 		$data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$data['webDetail']=$this->db->get('website_name_logo')->row();
	 		$data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
	 		$this->load->view('common/header',$data);
	 		$this->load->view('pages/cart');
	 		$this->load->view('common/footer');
	 	}
	 	public function deliveryAddress(){
	 		// print_r($_POST);
	 		$this->session->set_userdata('deliveryAddress',serialize($_POST));
	 		if($this->session->userdata('deliveryAddress')){
	 			die(json_encode(array("code"=>1)));
	 		}else{
	 			die(json_encode(array("code"=>0)));
	 		}

	 	}
	 	public function orderConfirmation(){
	 		$data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$data['webDetail']=$this->db->get('website_name_logo')->row();
	 		$data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
	 		$this->load->view('common/header',$data);
	 		$this->load->view('pages/orderConfirmed');
	 		$this->load->view('common/footer');
	 	}

	 	public function orderPlaced(){
	 		// die(json_encode($_POST));
	 		
	 		// {"country":"","first_name":"sdf","last_name":"sdf","full_address":"sd","state":"","city":"","zip_code":"sdf","email":"sfs@sdsnom","phone":"sdf","payumoney":"on"}
	 		$fullName=$this->input->post('first_name').' '.$this->input->post('last_name');
	 		$address=array(
	 							"fullName"=>$fullName,
	 							"email"=>$this->input->post('email'),
	 							"country"=>$this->input->post('country'),
	 							"state"=>$this->input->post('state'),
	 							"city"=>$this->input->post('city'),
	 							"zip_code"=>$this->input->post('zip_code'),
	 							
	 						);

	 		$deliveryAddress=serialize($address);
	 		// print_r($this->session->deliveryAddress);
	 		$user_id=11;	
	 		if($this->input->post('payumoney')){
	 			//Implement Payment Gateway
	 			$paymentMode=2;
	 		}else{
	 			//Implement Cash On Delivery
	 			$paymentMode=1;
	 		}
	 		// echo $paymentMode;
	 		// die(json_encode($_POST));
	 		$data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// echo 'good to go ';
	 		$data['webDetail']=$this->db->get('website_name_logo')->row();
	 		$data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();

	 		$cartItems=$this->cart->contents();
	 		$productIdArr=array();
	 		$priceArr=array();
	 		$quantArr=array();
	 		
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
	 							"cart_details"=>serialize($order),
	 							"user_id"=>$user_id,
	 							"payment_mode"=>$paymentMode,
	 							"amount_status"=>2,
	 							"deli_add"=>$deliveryAddress
	 							);
	 		// print_r($orderDetails);
	 		// die;
	 		// if($this->session->userdata('deliveryAddress')){
	 			if(count($this->db->where($orderDetails)->get('orders_')->result())==0){
		 			if($this->db->insert('orders_',$orderDetails)){
		 				$this->session->set_flashdata('msg','Order Placed.');
		 				$this->cart->destroy();
		 				// $this->session->unset_userdata('deliveryAddress');
		 			}else{
		 				$this->session->set_flashdata('msg','Failed To Placed Order.');
		 			}
		 		}else{
		 			$this->session->set_flashdata('msg','Order Already Exists.');
		 		}	
	 		// }else{
	 		// 	redirect('Home');
	 		// }
	 		echo $this->session->set_flashdata('msg');
	 		// print_r($orderDetails);
	 		// $this->load->view('layout/header',$data);
	 		// $this->load->view('pages/orderPlaced');
	 		// $this->load->view('common/footer');
	 	}
	 	
	 	public function addToCart(){
	 		$productDetails=$this->db->where('product_id',$this->input->post('product_id'))->get('crops_')->row();
	 		
	 		$data = array(
			        'id'      => 'Product-Id-'.$productDetails->product_id,
			        'qty'     => 1,
			        'price'   => $productDetails->price,
			        'name'    => trim($productDetails->name),
			        'options' => array(
			        					'image' => $productDetails->image, 
			        					'product_id'=>$productDetails->product_id,
			        					// 'total'=>(int)($productDetails->price) * (int)(1),
			        					'quant_type' => $productDetails->quant_type
			        					
			        				)
			);
	 		$resd=$this->cart->insert($data);
	 		// print_r($data);
	 		// die;
	 		if($resd){
	 			// $this->session->set_flashdata('msg',"Product Added Successfully.");
	 			// redirect(base_url('Home'));
	 			die(json_encode(array("code"=>1)));
	 		}else{
	 			// $this->session->set_flashdata('msg',"Failed To Add.");
	 			// redirect(base_url('Home'));
	 			die(json_encode(array("code"=>0)));
	 		}
	 		
			// $this->cart->insert($data);
	 	}
	 	public function addToCartFromShop(){
	 		// print_r($_POST);
	 		$productDetails=$this->db->where('product_id',$this->input->post('product_id'))->get('crops_')->row();
	 		$data = array(
			        'id'      => 'Product-Id-'.$productDetails->product_id,
			        'qty'     => $this->input->post('quantity'),
			        'price'   => $productDetails->price,
			        'name'    => $productDetails->name,
			        'options' => array(
			        					'image' => $productDetails->image, 
			        					'product_id'=>$productDetails->product_id,
			        					// 'total'=>(int)($productDetails->price) * (int)(1),
			        					'quant_type' => $productDetails->quant_type
			        					
			        				)
			);
	 		 // print_r($data);
	 		if($this->cart->insert($data)){
	 			$this->session->set_flashdata('msg',"Product Added Successfully.");
	 			redirect(base_url('Shop/productDetail/').$this->input->post('product_id'));
	 			// die(json_encode(array("code"=>1)));
	 		}else{
	 			$this->session->set_flashdata('msg',"Failed To Add.");
	 			redirect(base_url('Shop/productDetail/').$this->input->post('product_id'));
	 			// die(json_encode(array("code"=>0)));
	 		}
	 		
			// $this->cart->insert($data);
	 	}
	 	public function updateCart(){
	 		// print_r($_POST);
	 		$data=array();
	 		foreach ($_POST as $key => $value) {
	 			// echo ' Key : '.$key.' Value: '.$value.' <br>';
	 			$data[]=array(
					                'rowid'   => $key,
					                'qty'     => $value
					        );
	 		}
	 		// print_r($data);
	 		// $data = array(
				// 	        array(
				// 	                'rowid'   => 'b99ccdf16028f015540f341130b6d8ec',
				// 	                'qty'     => 3
				// 	        ),
				// 	        array(
				// 	                'rowid'   => 'xw82g9q3r495893iajdh473990rikw23',
				// 	                'qty'     => 4
				// 	        ),
				// 	        array(
				// 	                'rowid'   => 'fh4kdkkkaoe30njgoe92rkdkkobec333',
				// 	                'qty'     => 2
				// 	        )
				// 	);

			if($this->cart->update($data)){
				$this->session->set_flashdata('msg','Cart Updated Successfully.');
			}else{
				$this->session->set_flashdata('msg','Cart Updated Successfully.');
			}
			redirect('Cart');

	 	}
	 	public function removeItem($cart_id){
	 		$data=array(
               'rowid' => $cart_id,
               'qty'   => 0
            );

			$this->cart->update($data);
			redirect(base_url('Shop/Cart'));
	 	}
	 	public function checkOut(){
	 		$data['categories']=$this->getCategories();
	 		// $data['categories']=$this->db->order_by('rand()')->get('categories')->result();
	 		// // echo 'good to go ';
	 		// $data['webDetail']=$this->db->get('website_name_logo')->row();
	 		// $data['gallery_']=$this->db->join('categories','categories.id= crops_.veg_category')->order_by('rand()')->get('crops_')->result();
	 		$this->load->view('layout/header',$data);
	 		$this->load->view('pages/checkout');
	 		$this->load->view('layout/footer');
	 		
	 	}
	 	
	 }

?>