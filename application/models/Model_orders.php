<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_orders extends CI_Model {

	public function process(){

        $invoice = array(

            'date' => date('Y-m-d H:i:s'),
            'due_date' => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
            'id_users' => $this->get_logged_users_id(),
            'status' => 'unpaid'
        );

        $this->db->insert('invoice', $invoice);
        $invoice_id = $this->db->insert_id();

//put to orders
        foreach($this->cart->contents() as $item){

            $data = array(

                'invoice_id' => $invoice_id,
                'menu_id' => $item['id'],
                'menu_name' => $item['name'],
                'qty' => $item['qty'],
                'price' => $item['price']

            );
            $this->db->insert('orders', $data);
        }

        return TRUE;
    }


 public function all()
    {
       return $this->db->select('*')
        ->from('users')
    ->join('invoice','id_users = users.id')
    ->order_by('date', 'DESC')
    ->get()
    ->result(); 
    }


    public function get_invoice_by_id($invoice_id){

        $hasil = $this->db->where('id', $invoice_id)->limit(1)->get('invoice');

        if($hasil->num_rows() > 0){

            return $hasil->row();
        } else{

            return FALSE;
        }

    }

    public function get_order_by_invoice($invoice_id){

        $hasil = $this->db->where('invoice_id', $invoice_id)
                            ->join('invoice','invoice.id = invoice_id')
                            ->join('users','id_users = users.id')
                            ->get('orders');

          if($hasil->num_rows() > 0){

            return $hasil->result();
        } else{

            return FALSE;
        }

    }

    public function get_logged_users_id(){

        $hasil = $this->db
                ->select('id')
                ->where('username', $this->session->userdata('username'))
                ->limit(1)
                ->get('users');
            if($hasil->num_rows() > 0){
                return $hasil->row()->id;
            } else {

                return 0;
            }
    }

    
}



