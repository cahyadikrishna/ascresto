<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_umum extends CI_Model {

	 private $food = "food";
      private $drinks = "drinks";
	

	 public function getAll()
    {
        return $this->db->order_by('food_id', 'DESC')->get($this->food)->result();  
    }

     public function getDrinks()
    {
        return $this->db->order_by('drinks_id', 'DESC')->get($this->drinks)->result();
    }

    public function getIdFood($id)
    {
        return $this->db->get_where($this->food, ["food_id" => $id])->row();
    }

     public function getIdDrinks($id)
    {
        return $this->db->get_where($this->drinks, ["drinks_id" => $id])->row();
    }
    
}



