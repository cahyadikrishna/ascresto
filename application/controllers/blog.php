<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
            $this->load->library('disqus');
        $this->load->model("blog_umum");
    
    }

    public function index()
    {      
    	  $data["drinks"] = $this->blog_umum->getDrinks();
        $data["food"] = $this->blog_umum->getAll();



        //footer blog
        $data["footblog"] = $this->blog_umum->getfootblog();

        $this->load->view("blog", $data);

    }

        public function food($id){

        $detail = $this->blog_umum->get_detail_food($id);
        $data['detail'] = $detail;

            $data['disqus'] = $this->disqus->get_html();

             $data["footblog"] = $this->blog_umum->getfootblog();

               $data["foodrecentblog"] = $this->blog_umum->foodrecentblog();
                $data["drinksrecentblog"] = $this->blog_umum->drinksrecentblog();

        $this->load->view('blog-single', $data);

    }

      public function drinks($id){

        $detail = $this->blog_umum->get_detail_drinks($id);
        $data['detail'] = $detail;

            $data['disqus'] = $this->disqus->get_html();

             $data["footblog"] = $this->blog_umum->getfootblog();

               $data["foodrecentblog"] = $this->blog_umum->foodrecentblog();
                $data["drinksrecentblog"] = $this->blog_umum->drinksrecentblog();

        $this->load->view('drinks-blog-single', $data);

    }




}
