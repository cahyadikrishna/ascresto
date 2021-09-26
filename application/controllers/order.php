<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username'))
        {
            redirect('login');
        }
        
        $this->load->model("model_orders");
         
    }

    public function index()
    {
    	$is_processed = $this->model_orders->process();
        if($is_processed) {

            $this->cart->destroy();
             echo '<script>alert("Your Order are being processed, Please make sure you Transfered the Payment!");</script>';
          redirect('customer/shopping_history', 'refresh');
        } else {

            $this->session->set_flashdata('error','Failed to processed your order, please try again!');
            redirect('shop/cart', 'refresh');
        }
    }

}

