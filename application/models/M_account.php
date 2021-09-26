<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

  		 private $admin = "admin";

    public $admin_id;
    public $fname;
    public $admin_img = "deaf.jpg";
    public $email;
     public $username;
          public $password;

       function daftar($data)
       {
            $this->db->insert('admin',$data);
       }

        public function save()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->admin_img = $this->_uploadImage();
        $this->email = $post["email"];
         $this->username = $post["username"];
         $this->password = $post["password"];
        $this->db->insert($this->admin, $this);
    }

  }