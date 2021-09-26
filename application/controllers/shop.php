<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
             $this->load->library('form_validation');
        $this->load->model("shop_umum");
            $this->load->model("home_umum");
              $this->load->model("blog_umum");
    }

    public function index()
    {
    	  $data["drinks"] = $this->shop_umum->getDrinks();
        $data["food"] = $this->shop_umum->getAll();
       $data["fod"] = $this->home_umum->getFod();
            $data["drik"] = $this->home_umum->getDrik();

              //footer blog
        $data["footblog"] = $this->blog_umum->getfootblog();
        $this->load->view("shop", $data);
    }

    public function add_food($food_id){

        $food = $this->shop_umum->getIdFood($food_id);
        $data = array(
        'id'      => $food->food_id,
        'qty'     => 1,
        'price'   => $food->food_price,
        'name'    => $food->food_name,
        'description' => $food->food_desc,
        'gambar'    => $food->food_img       
        );

        $this->cart->insert($data);
        redirect('shop/cart');

    }

    public function cart(){

        // var_dump($this->cart->contents());
        $data["footblog"] = $this->blog_umum->getfootblog();
        $this->load->view('cart_list', $data);
    }


    public function remove_food($food_id){

        $data = array(
            'rowid'   => $food_id,
            'qty'     => 0
        );

        $this->cart->update($data);
         redirect('shop/cart');
    }

   public function add_drinks($drinks_id){

     $drinks = $this->shop_umum->getIdDrinks($drinks_id);
        $data = array(
        'id'      => $drinks->drinks_id,
        'qty'     => 1,
        'price'   => $drinks->drinks_price,
        'name'    => $drinks->drinks_name,
        'description' => $drinks->drinks_desc,
        'gambar'    => $drinks->drinks_img       
        );

        $this->cart->insert($data);
        redirect('shop/cart');

   }

    public function remove_drinks($drinks_id){

        $data = array(
            'rowid'   => $drinks_id,
            'qty'     => 0
        );

        $this->cart->update($data);
         redirect('shop/cart');
    }

}
