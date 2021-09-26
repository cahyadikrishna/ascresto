<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model {

	 public function get_shopping_history($user)
    {
        $hasil = $this->db->select('i.*, SUM(o.qty * o.price) AS total')
                ->from('invoice i, users u, orders o')
                ->where('u.username', $user)
                ->where('u.id = i.id_users')
                ->where('o.invoice_id = i.id')
                ->group_by('o.invoice_id')
                ->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false; // if there are not matching record
        }
    }

    public function mark_invoice_confirmed($invoice_id, $amount){

        $ret = true;
        //check the invoice
      $invoice =  $this->db->where('id', $invoice_id)->limit(1)->get('invoice');
      if($invoice->num_rows() == 0 ){

        $ret = $ret && false;
      } else {

        $total = $this->db->select('SUM(qty * price) as total')
                    ->where('invoice_id', $invoice_id)
                    ->get('orders');
                if($total->row()->total > $amount){
                    $ret = $ret && false;
                } else{
                    // mark invoice to Confirmed
                    $this->db->where('id',$invoice_id)->update('invoice', array('status'=>'confirmed'));
                }
      }
            return $ret;

    }
    
}




