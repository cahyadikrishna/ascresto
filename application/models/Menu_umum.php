<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_umum extends CI_Model {

	 private $food = "food";
      private $drinks = "drinks";
	

	 public function getAll()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('food','kategori_id = id_kategori','right')
    ->order_by('food_id', 'DESC')
    ->get()
    ->result(); 
    }

     public function getDrinks()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('drinks','kategori_id = id_kategori','right')
    ->order_by('drinks_id', 'DESC')
    ->get()
    ->result(); 
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result();
    }



    public function getFod()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('food','kategori_id = id_kategori','right')
    ->order_by('food_id', 'DESC')
    ->get()
    ->result(); 
    }

     public function getDrik()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('drinks','kategori_id = id_kategori','right')
    ->order_by('drinks_id', 'DESC')
    ->get()
    ->result(); 
    }


  public function get_food_keyword($keyword){
            $this->db->select('*');
            $this->db->from('kategori')->join('food','kategori_id = id_kategori','right');;
            $this->db->like('food_name',$keyword);
            $this->db->or_like('kategori_name',$keyword);
            return $this->db->get()->result();
        }

         public function get_drinks_keyword($keyword){
            $this->db->select('*');
            $this->db->from('kategori')->join('drinks','kategori_id = id_kategori','right');
            $this->db->like('drinks_name',$keyword);
            $this->db->or_like('kategori_name',$keyword);
            return $this->db->get()->result();
        }
    
}
