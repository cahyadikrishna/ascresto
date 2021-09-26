<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

           if(!$this->session->userdata('username'))
        {
            redirect('login');
        }
        $this->load->model("model_customer");
          $this->load->model("blog_umum");
         
    }

    public function index()
    {
    	// empty
    }

    public function payment_confirmation($invoice_id = 0){

                $this->form_validation->set_rules('invoice_id','Invoice ID','required|integer');
                $this->form_validation->set_rules('amount','Amount Transfered','required|integer');

        if($this->form_validation->run() == FALSE )

        {
                if ($this->input->post('invoice_id')){
                     $data['invoice_id'] = set_value('invoice_id');
                } else {
                     $data['invoice_id'] = $invoice_id;
                }

             $data["foodrecentblog"] = $this->blog_umum->foodrecentblog();
            $data["drinksrecentblog"] = $this->blog_umum->drinksrecentblog();


            //footer blog
            $data["footblog"] = $this->blog_umum->getfootblog();

            $this->load->view('customer/form_payment_confirmation', $data);

        } else {
            //proceed to mark the record on database table
           $isValid = $this->model_customer->mark_invoice_confirmed(set_value('invoice_id'),  set_value('amount'));

           if($isValid){
            $this->session->set_flashdata('message', 'Thank You!, We will Check your Payment Confirmation');
              redirect('customer/shopping_history');
        } else {
             $this->session->set_flashdata('error','Sorry.. the amount transfered is wrong, Please Try Again!');
            redirect('customer/payment_confirmation/'.set_value('invoice_id'));
        }
      }
        }

    public function shopping_history(){

        $user = $this->session->userdata('username');
        $data['history'] = $this->model_customer->get_shopping_history($user);

            //footer blog
         $data["footblog"] = $this->blog_umum->getfootblog();
        $this->load->view('customer/shopping_history_list', $data);
    }

}
