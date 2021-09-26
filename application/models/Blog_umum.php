<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_umum extends CI_Model {
	
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



      //footer blog
     public function getfootblog()
    {
        return $this->db->order_by('food_id', 'DESC')->limit(2)->get($this->food)->result();
    }



    // recent blog
     public function foodrecentblog()
    {
        return $this->db->order_by('food_id', 'DESC')->limit(3)->get($this->food)->result();
    }

     public function drinksrecentblog()
    {
        return $this->db->order_by('drinks_id', 'DESC')->limit(2)->get($this->drinks)->result();
    }


    //get detail food by id
    public function get_detail_food($id = NULL){
    
    $query = $this->db->get_where('food', array('food_id' => $id))->row();
    return $query;

  }

   //get detail drinks by id
    public function get_detail_drinks($id = NULL){
    
    $query = $this->db->get_where('drinks', array('drinks_id' => $id))->row();
    return $query;

  }

    
}





