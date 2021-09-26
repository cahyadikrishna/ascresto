<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
               $this->simple_login->cek_login();
        $this->load->model("model_orders");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["invoice"] = $this->model_orders->All();
        $this->load->view("admin/invoice/list", $data);
    }

    public function detail($invoice_id){

         if (!isset($invoice_id)) redirect('admin/invoice');

        $data['invoice'] = $this->model_orders->get_invoice_by_id($invoice_id);
        $data['orders'] = $this->model_orders->get_order_by_invoice($invoice_id);
        $this->load->view('admin/invoice/detail_invoice', $data);
    }

     public function cetak($invoice_id){

          if (!isset($invoice_id)) redirect('admin/invoice');

        $data['invoice'] = $this->model_orders->get_invoice_by_id($invoice_id);
        $data['orders'] = $this->model_orders->get_order_by_invoice($invoice_id);
        $this->load->view('admin/invoice/print_invoice', $data);
    }

 
}