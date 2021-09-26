<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	private $food = "food";
      private $drinks = "drinks";
	

	 public function getFood()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('food','kategori_id = id_kategori','right')
    ->limit(3)
    ->order_by('food_id', 'DESC')
    ->get()
    ->result(); 
    }

   public function getKategori()
    {
        return $this->db->get('kategori')->result();
    }


     public function getDrink()
    {
         return $this->db->select('*')
        ->from('kategori')
    ->join('drinks','kategori_id = id_kategori','right')
    ->limit(3)
    ->order_by('drinks_id', 'DESC')
    ->get()
    ->result(); 
    }

   public function jumlahFood()
{   
    $query = $this->db->get('food');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

 public function jumlahDrinks()
{   
    $query = $this->db->get('drinks');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

 public function jumlahOrders()
{   
    $query = $this->db->get('orders');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahUsers()
{   
    $query = $this->db->get('users');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

}
