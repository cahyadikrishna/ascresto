<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->model("menu_umum");
          $this->load->model("home_umum");
           $this->load->model("blog_umum");
       
    }

    public function index()
    {
    	  $data["drinks"] = $this->menu_umum->getDrinks();
          $data["food"] = $this->menu_umum->getAll();

                $data["fod"] = $this->menu_umum->getFod();
                $data["drik"] = $this->menu_umum->getDrik();

                   $data["ourfood"] = $this->home_umum->getOurfood();
                   $data["ourdrinks"] = $this->home_umum->getOurdrinks();

                //footer blog
            $data["footblog"] = $this->blog_umum->getfootblog();
            
        $this->load->view("menu", $data);

    }

    public function search(){

                $data["fod"] = $this->menu_umum->getFod();
                $data["drik"] = $this->menu_umum->getDrik();


                //footer blog
            $data["footblog"] = $this->blog_umum->getfootblog();

            $keyword = $this->input->post('keyword');
            $data['foodSearch']=$this->menu_umum->get_food_keyword($keyword);
             $data['drinksSearch']=$this->menu_umum->get_drinks_keyword($keyword);
             $data['key'] = $keyword;
            $this->load->view('search',$data);
        }
}
