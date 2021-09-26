<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_umum extends CI_Model {

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

     public function getOurfood()
    {
        return $this->db->order_by('food_id', 'DESC')->limit(3)->get($this->food)->result();
    }

     public function getOurdrinks()
    {
        return $this->db->order_by('drinks_id', 'DESC')->limit(3)->get($this->drinks)->result();
    }

       public function getDrik()
    {
         return $this->db->select('*')
        ->from('kategori')
    ->join('drinks','kategori_id = id_kategori','right')
    ->order_by('drinks_date', 'ASC')
    ->limit(2)
    ->get()
    ->result(); 
    }

    public function getFod()
    {

       return $this->db->select('*')
        ->from('kategori')
    ->join('food','kategori_id = id_kategori','right')
    ->order_by('food_date', 'ASC')
    ->limit(2)
    ->get()
    ->result(); 
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result();
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

  public function getMail()
    {
         return $this->db->select('*')
        ->from('mail')
    ->order_by('mail_date', 'Desc')
    ->limit(4)
    ->get()
    ->result(); 
    }

    
}
