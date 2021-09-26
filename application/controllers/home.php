<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
             $this->load->library('form_validation');
        $this->load->model("home_umum");
         $this->load->model("blog_umum");
    
    }

    public function index()
    {
    	  $data["drinks"] = $this->home_umum->getDrinks();
        $data["food"] = $this->home_umum->getAll();

         $data["fod"] = $this->home_umum->getFod();
            $data["drik"] = $this->home_umum->getDrik();

             $data["mail"] = $this->home_umum->getMail();

            $data["ourfood"] = $this->home_umum->getOurfood();
            $data["ourdrinks"] = $this->home_umum->getOurdrinks();

               $data['jumFood'] = $this->home_umum->jumlahFood();
      $data['jumDrinks'] = $this->home_umum->jumlahDrinks();
        $data['jumOrders'] = $this->home_umum->jumlahOrders();
          $data['jumUsers'] = $this->home_umum->jumlahUsers();

            //footer blog
            $data["footblog"] = $this->blog_umum->getfootblog();

        $this->load->view("home", $data);
    }

}
